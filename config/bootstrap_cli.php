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

use Cake\Core\Configure;

/*
 * Additional bootstrapping and configuration for CLI environments should
 * be put here.
 */

// Set the fullBaseUrl to allow URLs to be generated in shell tasks.
// This is useful when sending email from shells.
// Configure::write('App.fullBaseUrl', php_uname('n'));

// Set logs to different files so they don't have permission conflicts.
if (Configure::check('Log.debug')) {
    Configure::write('Log.debug.file', 'cli-debug');
}
if (Configure::check('Log.error')) {
    Configure::write('Log.error.file', 'cli-error');
}
