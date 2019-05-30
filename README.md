## Mix Pack

这是一个使用 MIX 开发的系统命令，可以用来将 [mix-php/mix-phar](https://github.com/mix-php/mix-phar) 开发的项目打包为 Phar 文件（可以理解为 Golang 编译为执行文件一样），当然也可以用来打包其他的任何 PHP 项目，比如将某个库打包为 Phar，供其他人 include 使用。

## 下载

- [mix-pack v1.0.1](https://github.com/mix-php/mix-pack/releases/download/v1.0.1/mix-pack.phar)

## Use examples

查看帮助 `php mix-pack.phar`

```
C:\works\projects>php mix-pack.phar
Usage: mix-pack.phar [OPTIONS] COMMAND [SUBCOMMAND] [arg...]

Options:
  -h, --help    Print usage.
  -v, --version Print version information.

Commands:
  build         Package the project as a PHAR file.

Run 'mix-pack.phar COMMAND [SUBCOMMAND] --help' for more information on a command.

Developed with Mix PHP framework. (mixphp.cn)
```

查看 `build` 命令的帮助 `php mix-pack.phar build -h`

```
C:\works\projects>php mix-pack.phar build -h
Usage: mix-pack.phar build [arg...]

Options:
  -d, --dir             The project directory to be packaged
  -o, --output          The name of the output phar file
  -b, --bootstrap       The path to the Bootstrap file
  -r, --regex           Extract regular expressions

Developed with Mix PHP framework. (mixphp.cn)
```

打包 PHP 项目为 Phar 文件

```
C:\works\projects>php mix-pack.phar build -d C:\works\projects\app -o C:\works\projects\app.phar -b bin\bootstrap.php
Build successfully!
 - Phar file: C:\works\projects\app.phar
``` 

执行打包好的应用 (Phar)：

```
// windows
C:\works\projects>php app.phar
// linux
$> ./app.phar
```

## License

Apache License Version 2.0, http://www.apache.org/licenses/
