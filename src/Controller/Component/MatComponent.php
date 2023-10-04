<?php
declare(strict_types=1);

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;

/**
 * Mat component
 */
class MatComponent extends Component
{
    public function add($a, $b) {
        $add = $a + $b;
        return $add;
    }
}
