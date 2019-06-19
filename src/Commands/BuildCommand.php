<?php

namespace Phar\Commands;

use Mix\Console\CommandLine\Flag;
use Phar\Models\BuildForm;

/**
 * Class BuildCommand
 * @package Phar\Commands
 * @author LIUJIAN <coder.keda@gmail.com>
 */
class BuildCommand
{

    /**
     * 主函数
     */
    public function main()
    {
        // phar.readonly检查
        if (ini_get('phar.readonly')) {
            println("please use 'php -d phar.readonly=0 mix-pack.phar build opt...'");
            exit;
        }
        // 获取参数
        $argv = [
            'dir'       => Flag::string(['d', 'dir'], ''),
            'output'    => Flag::string(['o', 'output'], ''),
            'bootstrap' => Flag::string(['b', 'bootstrap'], ''),
            'regex'     => Flag::string(['r', 'regex'], ''),
        ];
        // 使用模型
        $model             = new BuildForm();
        $model->attributes = $argv;
        $model->setScenario('main');
        if (!$model->validate()) {
            println($model->getError());
            exit;
        }
        // 打包
        $phar = new \Phar($model->output);
        $phar->startBuffering();
        $phar->buildFromDirectory($model->dir, $model->regex);
        $phar->setStub('#!/usr/bin/env php' . "\n" . $phar->createDefaultStub(str_replace('\\', '/', $model->bootstrap)));
        $phar->stopBuffering();
        // 完成
        println("Build successfully!");
        println(" - Phar file: {$model->output}");
    }

}
