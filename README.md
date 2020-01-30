<h1 align="center"> Shared Lock </h1>
<p align="center">:rainbow: 共享内存、锁</p>

![StyleCI build status](https://github.styleci.io/repos/205969554/shield) 
[![Total Downloads](https://poser.pugx.org/mitirrli/shared-lock/downloads)](https://packagist.org/packages/mitirrli/shared-lock)
[![Latest Stable Version](https://poser.pugx.org/mitirrli/shared-lock/v/stable)](https://packagist.org/packages/mitirrli/shared-lock)
[![Latest Unstable Version](https://poser.pugx.org/mitirrli/shared-lock/v/unstable)](https://packagist.org/packages/mitirrli/shared-lock)
<a href="https://packagist.org/packages/mitirrli/shared-lock"><img src="https://poser.pugx.org/mitirrli/shared-lock/license" alt="License"></a>

[![Latest Stable Version](https://poser.pugx.org/mitirrli/shared-lock/v/stable)](https://packagist.org/packages/mitirrli/shared-lock)

## 环境需求

- PHP >= 7.0

## 安装

```shell
$ composer require "mitirrli/shared-lock"
```

## 使用

```        
$client = new Memory();

$client->lock();//加锁
$client->unlock();//解锁
```
