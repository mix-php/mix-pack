<?php

namespace Cli\Commands;

use Mix\Console\Command;
use Mix\Console\CommandLine\Flag;

/**
 * 打包项目命令
 * @author LIUJIAN <coder.keda@gmail.com>
 */
class ProjectCommand extends Command
{

    /**
     * 主函数
     */
    public function main()
    {
        // 获取参数
        $basedir   = Flag::string('basedir', '');
        $output    = Flag::string('output', '');
        $bootstrap = Flag::string('bootstrap', '');
        $regex     = Flag::string('regex', '');
        if (empty($basedir)) {
            println('\'--basedir\' parameter cannot be empty.');
            return;
        }
        if (empty($output)) {
            println('\'--output\' parameter cannot be empty.');
            return;
        }
        // 打包
        $phar = new \Phar($output);
        $phar->buildFromDirectory($basedir, $regex);
        $phar->compressFiles(\Phar::GZ);
        $phar->stopBuffering();
        $phar->setStub($phar->createDefaultStub($bootstrap));
        // 完成
        println("Compile successfully, file path: {$output}");
    }

}
