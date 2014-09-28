<?php
define('RUNTIME_PATH', SITE_PATH . '/cache/' . APP_NAME . '/');
define('LOG_PATH', SITE_PATH . '/logs/');
// 加载框架入口文件
define("TP_PATH", str_ireplace('\\', '/', dirname(__FILE__)));
require(TP_PATH . "/ThinkPHP/ThinkPHP.php");
?>