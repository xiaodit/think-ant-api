<?php

/*
 * This file is part of TAnt.
 * @link     https://github.com/edenleung/think-admin
 * @document https://www.kancloud.cn/manual/thinkphp6_0
 * @contact  QQ Group 996887666
 * @author   Eden Leung 758861884@qq.com
 * @copyright 2019 Eden Leung
 * @license  https://github.com/edenleung/think-admin/blob/6.0/LICENSE.txt
 */

return [
    /*
     *Default Tauthz enforcer
     */
    'default' => 'basic',

    'log' => [
        // changes whether Lauthz will log messages to the Logger.
        'enabled' => true,
        // Casbin Logger, Supported: \Psr\Log\LoggerInterface|string
        'logger' => 'log',
    ],

    'enforcers' => [
        'basic' => [
            /*
            * Model 设置
            */
            'model' => [
                // 可选值: "file", "text"
                'config_type'      => 'file',
                'config_file_path' => config_path() . 'tauthz-rbac-model.conf',
                'config_text'      => '',
            ],

            // 适配器 .
            'adapter' => tauthz\adapter\DatabaseAdapter::class,

            /*
            * 数据库设置.
            */
            'database' => [
                // 数据库连接名称，不填为默认配置.
                'connection' => '',
                // 策略表名（不含表前缀）
                'rules_name' => 'rules',
                // 策略表完整名称.
                'rules_table' => null,
            ],
        ],
    ],
];
