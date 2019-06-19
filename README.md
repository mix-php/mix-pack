## Mix Pack

将 PHP 项目打包成 Phar 文件的工具

A tool for packaging PHP projects into Phar files

## 下载 (Download)

- [mix-pack.phar v1.0.2](https://github.com/mix-php/mix-pack/releases/download/v1.0.2/mix-pack.phar)
- [mix-pack.phar v1.0.1](https://github.com/mix-php/mix-pack/releases/download/v1.0.1/mix-pack.phar)

## 使用 (Usage)

执行打包任务：

```
php mix-pack.phar build -d /data/app -o /data/app.phar -b bin/bootstrap.php
```

如果 `phar.readonly` 没有关闭，按如下方法执行：

```
php -d phar.readonly=0 mix-pack.phar build -d /data/app -o /data/app.phar -b bin/bootstrap.php
```

打包成功：

```
Build successfully!
 - Phar file: /data/app.phar
```

## 执行打包好的应用 (Phar)

- windows

指定 php 执行

```
C:\project>php app.phar
```

- linux

指定 php 执行

```
$> php app.phar
```

通过环境变量的默认 php 执行

```
$> ./app.phar
```

## 全部命令参数

```
php mix-pack.phar build --help
```

- `-d, --dir`             The project directory to be packaged
- `-o, --output`          The name of the output phar file
- `-b, --bootstrap`       The path to the Bootstrap file
- `-r, --regex`           Extract regular expressions

## 打包的目录

指定要打包的 PHP 项目所在的目录

```
php mix-pack.phar build --dir=/data/app
```

也可使用短参数

```
php mix-pack.phar build -d /data/app
```

## 输出的 Phar 路径

指定打包后输出的 Phar 文件的路径，必须 `.phar` 后缀

```
php mix-pack.phar build --output=/data/app.phar
```

也可使用短参数

```
php mix-pack.phar build -o /data/app.phar
```

## 引导文件

设置 Phar 文件执行时，引入的入口文件，**只能是相对路径**

> 非必须参数

```
php mix-pack.phar build --bootstrap=bin/bootstrap.php
```

也可使用短参数

```
php mix-pack.phar build -b bin/bootstrap.php
```

## 文件提取正则

设置打包时提取文件的正则表达式，用于过滤掉一些不需要的文件

> 非必须参数

```
php mix-pack.phar build --regex="/\.php$/"
```

也可使用短参数

```
php mix-pack.phar build -r "/\.php$/"
```

## License

Apache License Version 2.0, http://www.apache.org/licenses/
