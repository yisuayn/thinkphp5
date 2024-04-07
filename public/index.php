<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// url判断  含有?ad= 的不允许访问
if ($_SERVER['REQUEST_URI'] === '?ad=') {
    header('HTTP/1.1 403 Forbidden');
    die('Access denied.');
  }
// [ 应用入口文件 ]

// 定义应用目录
define('APP_PATH', __DIR__ . '/../application/');
// define('APP_PATH',__DIR__ . '/../config');

define('CONF_PATH', __DIR__.'/../config/'); //定义独立的配置目录
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';
