<?php

use think\Env;

/**
 * 易优CMS
 * ============================================================================
 * 版权所有 2016-2028 海南赞赞网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.eyoucms.com
 * ----------------------------------------------------------------------------
 * 如果商业用途务必到官方购买正版授权, 以免引起不必要的法律纠纷.
 * ============================================================================
 * Author: 小虎哥 <1105415366@qq.com>
 * Date: 2018-4-3
 */

return array(
    // 数据库类型
    'type'            => Env::get('DB_TYPE', 'mysql'),
    // 服务器地址
    'hostname'        => Env::get('DB_HOST', 'mysql'),
    // 数据库名
    'database'        => Env::get('DB_NAME', 'shengxin_pinshesite'),
    // 用户名
    'username'        => Env::get('DB_USER', 'root'),
    // 密码
    'password'        => Env::get('DB_PASSWORD', 'root'),
    // 端口
    'hostport'        => Env::get('DB_PORT', '3306'),
    // 连接dsn
    'dsn'             => '',
    // 数据库连接参数
    'params'          => array(),
    // 数据库编码默认采用utf8
    'charset'         => Env::get('DB_CHARSET', 'utf8'),
    // 数据库表前缀
    'prefix'          => Env::get('DB_PREFIX', 'ta_'),
    // 数据库调试模式
    'debug'           => Env::get('DB_DEBUG', false),
    // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'deploy'          => Env::get('DB_DEPLOY', 0),
    // 数据库读写是否分离 主从式有效
    'rw_separate'     => Env::get('DB_RW_SEPARATE', false),
    // 读写分离后 主服务器数量
    'master_num'      => Env::get('DB_MASTER_NUM', 1),
    // 指定从服务器序号
    'slave_no'        => Env::get('DB_SLAVE_NO', ''),
    // 是否严格检查字段是否存在
    'fields_strict'   => Env::get('DB_FIELDS_STRICT', true),
    // 数据集返回类型
    'resultset_type'  => Env::get('DB_RESULTSET_TYPE', 'array'),
    // 自动写入时间戳字段
    'auto_timestamp'  => Env::get('DB_AUTO_TIMESTAMP', false),
    // 时间字段取出后的默认时间格式
    'datetime_format' => Env::get('DB_DATETIME_FORMAT', 'Y-m-d H:i:s'),
    // 是否需要进行SQL性能分析
    'sql_explain'     => Env::get('DB_SQL_EXPLAIN', false),
    // Builder类
    'builder'         => '',
    // Query类
    'query'           => '\\think\\db\\Query',
    // 是否需要断线重连
    'break_reconnect' => Env::get('DB_BREAK_RECONNECT', false),
);
