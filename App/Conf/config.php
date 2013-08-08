<?php
  $dbArray = json_decode(getenv("VCAP_SERVICES"),true);

  return array(
    //自动开启SESSION
    'SESSION_AUTO_START' => true,

    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => $dbArray['mysql-5.1']['credentials']['host'], // 服务器地址
    'DB_NAME'   => $dbArray['mysql-5.1']['credentials']['name'], // 数据库名
    'DB_USER'   => $dbArray['mysql-5.1']['credentials']['user'], // 用户名
    'DB_PWD'    => $dbArray['mysql-5.1']['credentials']['password'], // 密码
    'DB_PORT'   => $dbArray['mysql-5.1']['credentials']['port'], // 端口    
  );