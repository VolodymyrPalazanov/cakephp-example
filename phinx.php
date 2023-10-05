<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return
[
    'paths' => [
        'migrations' => 'config/Migrations',
        'seeds' => 'config/Seeds',
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => 'mysql_db',
            'name' => 'math_database',
            'user' => 'root',
            'pass' => 'root',
            'port' => '3306',
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => 'mysql_db',
            'name' => 'math_database',
            'user' => 'root',
            'pass' => 'root',
            'port' => '3306',
            'charset' => 'utf8',
        ],
        'testing' => [
            'adapter' => 'mysql',
            'host' => 'mysql_db',
            'name' => 'math_database',
            'user' => 'root',
            'pass' => 'root',
            'port' => '3306',
            'charset' => 'utf8',
        ],
    ],
    'version_order' => 'creation',
];
