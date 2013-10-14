<?php
header("Content-Type:text/html;charset=utf-8");
//由于多应用情况下，目录由应用自己设置，核心系统就需要定义主程序的路径
define("SITE_PATH", str_ireplace('\\', '/', dirname(__FILE__)));
define('APP_DEBUG', true);
?>