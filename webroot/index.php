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

// For built-in server
if (PHP_SAPI === 'cli-server') {
    $_SERVER['PHP_SELF'] = '/'.basename(__FILE__);

    $url = parse_url(urldecode($_SERVER['REQUEST_URI']));
    $file = __DIR__.$url['path'];
    if (!str_contains($url['path'], '..') && str_contains($url['path'], '.') && is_file($file)) {
        return false;
    }
}

require dirname(__DIR__).'/vendor/autoload.php';

use App\Application;
use Cake\Http\Server;

// Bind your application to the server.
$server = new Server(new Application(dirname(__DIR__).'/config'));

// Run the request/response through the application and emit the response.
$server->emit($server->run());
