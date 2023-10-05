#!/usr/bin/php -q
<?php

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

require dirname(__DIR__).'/vendor/autoload.php';

use App\Application;
use Cake\Console\CommandRunner;

// Build the runner with an application and root executable name.
$runner = new CommandRunner(new Application(dirname(__DIR__).'/config'), 'cake');

exit($runner->run($argv));
