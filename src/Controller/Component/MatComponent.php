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

namespace App\Controller\Component;

use Cake\Controller\Component;

/**
 * Mat component.
 */
class MatComponent extends Component
{
    /**
     * @return int
     */
    public function add(int $number1, int $number2)
    {
        return $number1 + $number2;
    }
}
