<?php
$config = require 'config.ini.php';
//设定项目配置
$array = array(
    //分组配置
    'APP_GROUP_LIST' => 'Home,Admin,WeiXin',
    'DEFAULT_GROUP' => 'Home',
    //COOKIE
    'COOKIE_PREFIX' => 'raise_sum_',
    'USER_AUTH_KEY' => 'raise_sum_uid',
    'APP_AUTOLOAD_PATH' => 'ORG.Util',
    'WEIXIN_TOKEN' => 'mohoo_raise',
    //缓存有效期
    'CACHE_TIME' => 60,
    'PAGE_SIZE' => 15,
);
//合并输出配置
return array_merge($config, $array);
?>