# LoginBase

## 概要

![概要](https://raw.githubusercontent.com/y-mizo/LoginBase/master/webroot/img/login_base.png)

[デモサイトはこちら](http://loginbase.unateco.com/)

ログインを必要とするサイトのための雛形サイト。  
XAMPP環境、CakePHP2.8.* で作成。

## 要件
* PHP 5.6 以上
* MySQL 5 以上

## インストール方法
```
$ git clone https://github.com/y-mizo/LoginBase.git
$ cd LoginBase
$ composer install
```

## tmpディレクトリの作成
tmpディレクトリを下記構成で作る。
```
tmp
├── cache
│   ├── models
│   └── persistent
└── logs
    ├── debug.log
    └── error.log
```

## データベースのセットアップ
※ 事前に MySQL 内に空のデータベースを作成しておく。  
文字コードは UTF8 。

▼ database.php ファイルを作成
```
$ cp Config/database.php.default Config/database.php
```

▼ database.php ファイルを編集
```
<?php
// Config/database.php

class DATABASE_CONFIG {

	public $default = array(
		'datasource'  => 'Database/Mysql',
		'persistent'  => false,
		'host'        => 'YOUR_HOSTNAME',
		'login'       => 'YOUR_USERID',
		'password'    => 'YOUR_PASSWORD',
		'database'    => 'YOUR_DATABASE',
		'prefix'      => '',
		'encoding'    => 'utf8',
        // XAMPP の場合は以下をアクティブにする。
        // 'unix_socket' => '/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock',
	);
        ... 
        ...
}
```

▼ データベースのテーブルを作成(マイグレーションの実行)
```
$ Console/cake Migrations.migration run all
```

## アプリケーションの起動
※ 事前に MySQL を起動しておく。
```
$ Console/cake server -p 8000
...
...
built-in server is running in http://YOUR_HOSTNAME:8000/
```



