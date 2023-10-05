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

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Math Entity.
 *
 * @property int                 $id
 * @property int                 $Number1
 * @property int                 $Number2
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property int                 $addedNums
 */
class Math extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'Number1' => true,
        'Number2' => true,
        'created' => true,
        'modified' => true,
        'addedNums' => true,
    ];
}
