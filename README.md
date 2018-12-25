## mix-compile

这是一个使用 MIX 开发的系统命令，可以用来将 [mixstart/mix-cli](https://github.com/mixstart/mix-cli) 开发的项目编译为 Phar 文件，当然也可以用来编译其他的任何项目，比如将某个库打包为 Phar。

## Use examples

查看帮助

```shell
C:\works\projects>php mix-compile.phar
Usage: mix-compile.phar [OPTIONS] COMMAND [SUBCOMMAND] [arg...]

Options:
  -h/--help     Print usage.
  -v/--version  Print version information.

Commands:
  project       Compile a project as a PHAR file.

Run 'mix-compile.phar COMMAND [SUBCOMMAND] --help' for more information on a command.

Developed with MixPHP framework.

```

查看 `project` 命令的帮助

```shell
C:\works\projects>php mix-compile.phar project --help
Usage: mix-compile.phar project [arg...]

Options:
  --basedir     The project directory to be compiled.
  --output      The name of the output phar file.
  --bootstrap   The path to the Bootstrap file.
  --regex       Extract the regular expression of the file.

Developed with MixPHP framework.
```

打包 `mix-cli` 项目为 Phar 文件

```shell
C:\works\projects>php mix-compile.phar project --basedir=C:\works\projects\mix-cli --output=C:\works\projects\mix-cli.phar --bootstrap=bin\mix-cli.php
Compile successfully, file path: C:\works\projects\mix-cli.phar
``` 

## License

Apache License Version 2.0, http://www.apache.org/licenses/