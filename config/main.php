<?php

// Console应用配置
return [

    // 应用名称
    'appName'          => 'mix-compile',

    // 应用版本
    'appVersion'       => '2.0.1',

    // 应用调试
    'appDebug'         => false,

    // 基础路径
    'basePath'         => str_replace(['phar://', '/'], ['', DIRECTORY_SEPARATOR], dirname(dirname(__DIR__))),

    // 运行目录路径
    'runtimePath'      => '',

    // 命令命名空间
    'commandNamespace' => 'Cli\Commands',

    // 命令
    'commands'         => [

        'project' => ['Project',
            'description' => "Compile a project as a PHAR file. ",
            'options'     => [
                '--basedir'   => 'The project directory to be compiled.',
                '--output'    => 'The name of the output phar file.',
                '--bootstrap' => 'The path to the Bootstrap file.',
                '--regex'     => 'Extract the regular expression of the file.',
            ],
        ],

    ],

    // 组件配置
    'components'       => [

        // 错误
        'error' => [
            // 依赖引用
            'ref' => beanname(Mix\Console\Error::class),
        ],

    ],

    // 依赖配置
    'beans'            => [

        [
            // 类路径
            'class'      => Mix\Console\Error::class,
            // 属性
            'properties' => [
                // 错误级别
                'level' => E_ALL,
            ],
        ],

    ],

];
