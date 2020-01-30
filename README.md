<h1 align="center"> Shared Lock </h1>
<p align="center">:rainbow: 共享内存、锁</p>

[![Latest Stable Version](https://poser.pugx.org/mitirrli/shared-memory/v/stable)](https://packagist.org/packages/mitirrli/shared-memory)
[![Total Downloads](https://poser.pugx.org/mitirrli/shared-memory/downloads)](https://packagist.org/packages/mitirrli/shared-memory)
[![Latest Unstable Version](https://poser.pugx.org/mitirrli/shared-memory/v/unstable)](https://packagist.org/packages/mitirrli/shared-memory)
[![License](https://poser.pugx.org/mitirrli/shared-memory/license)](https://packagist.org/packages/mitirrli/shared-memory)
[![Monthly Downloads](https://poser.pugx.org/mitirrli/shared-memory/d/monthly)](https://packagist.org/packages/mitirrli/shared-memory)
[![Daily Downloads](https://poser.pugx.org/mitirrli/shared-memory/d/daily)](https://packagist.org/packages/mitirrli/shared-memory)

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
