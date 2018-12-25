<?php

// Console应用配置
return [

    // 应用名称
    'appName'          => 'mix-compile',

    // 应用版本
    'appVersion'       => '1.0.0',

    // 应用调试
    'appDebug'         => false,

    // 初始化回调
    'initialize'       => [],

    // 基础路径
    'basePath'         => substr(dirname(dirname(__DIR__)), 7),

    // 命令命名空间
    'commandNamespace' => 'Cli\Commands',

    // 命令
    'commands'         => [

        'project' => ['Project',
            'description' => "Compile a project as a PHAR file. ",
            'options'     => [
                '--basedir'   => 'The project directory to be compiled.',
                '--output'    => 'Output phar file name.',
                '--bootstrap' => 'Boot entry file path.',
                '--regex'     => 'Regular expression of the compiled file.',
            ],
        ],

    ],

    // 组件配置
    'components'       => [

        // 错误
        'error' => [
            // 类路径
            'class' => 'Mix\Console\Error',
            // 错误级别
            'level' => E_ALL,
        ],

    ],

    // 类库配置
    'libraries'        => [

    ],

];
