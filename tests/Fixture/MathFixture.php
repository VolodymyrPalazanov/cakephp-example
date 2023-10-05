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

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MathFixture.
 */
class MathFixture extends TestFixture
{
    /**
     * Table name.
     */
    public string $table = 'math';

    /**
     * Init method.
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'Number1' => 1,
                'Number2' => 1,
                'created' => '2023-09-29 13:11:32',
                'modified' => '2023-09-29 13:11:32',
                'addedNums' => 1,
            ],
        ];
        parent::init();
    }
}
