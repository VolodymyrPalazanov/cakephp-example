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

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MathTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MathTable Test Case.
 *
 * @internal
 *
 * @coversNothing
 */
final class MathTableTest extends TestCase
{
    /**
     * Test subject.
     *
     * @var \App\Model\Table\MathTable
     */
    protected $Math;

    /**
     * Fixtures.
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Math',
    ];

    /**
     * setUp method.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Math') ? [] : ['className' => MathTable::class];
        $this->Math = $this->getTableLocator()->get('Math', $config);
    }

    /**
     * tearDown method.
     */
    protected function tearDown(): void
    {
        $this->Math = null;

        parent::tearDown();
    }

    /**
     * Test validationDefault method.
     *
     * @uses \App\Model\Table\MathTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        self::markTestIncomplete('Not implemented yet.');
    }
}
