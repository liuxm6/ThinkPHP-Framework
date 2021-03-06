<?php
return array(
    /* URL设置 */
    'URL_CASE_INSENSITIVE'  =>  true,                   // 默认false 表示URL区分大小写 true则表示不区分大小写
    'URL_MODEL'             =>  2,                      // URL访问模式,可选参数0、1、2、3,代表以下四种模式
    /*数据库设置*/
    'DB_TYPE'               =>  'mysql',                // 数据库类型
    'DB_HOST'               =>  '127.0.0.1',            // 服务器地址
    'DB_NAME'               =>  'demo',                 // 数据库名
    'DB_USER'               =>  'root',                 // 用户名
    'DB_PWD'                =>  '',                     // 密码
    'DB_PORT'               =>  '3306',                 // 端口
    'DB_PREFIX'             =>  '',                     // 数据库表前缀
    'DB_PARAMS'             =>  array(),                // 数据库连接参数
    'DB_DEBUG'              =>  true,                   // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,                   // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',                 // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0,                      // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,                  // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1,                      // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '',                     // 指定从服务器序号
    /*模板设置*/
    'TMPL_ENGINE_TYPE'      =>  'Think',                // 模板引擎
    'TMPL_LAYOUT_ITEM'      =>  '{__CONTENT__}',          // 布局模板的内容替换标识
    'LAYOUT_ON'             =>  true,                   // 是否启用布局
    'LAYOUT_NAME'           =>  'layout',               // 当前布局名称 默认为layout

    'DEFAULT_THEME'         =>  'default',              // 模板主题
);