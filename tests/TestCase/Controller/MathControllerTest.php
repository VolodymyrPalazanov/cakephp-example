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

namespace App\Test\TestCase\Controller;

use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\MathController Test Case.
 *
 * @uses \App\Controller\MathController
 *
 * @internal
 *
 * @coversNothing
 */
final class MathControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures.
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Math',
    ];

    /**
     * Test index method.
     *
     * @uses \App\Controller\MathController::index()
     */
    public function testIndex(): void
    {
        self::markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method.
     *
     * @uses \App\Controller\MathController::view()
     */
    public function testView(): void
    {
        self::markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method.
     *
     * @uses \App\Controller\MathController::add()
     */
    public function testAdd(): void
    {
        self::markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method.
     *
     * @uses \App\Controller\MathController::edit()
     */
    public function testEdit(): void
    {
        self::markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method.
     *
     * @uses \App\Controller\MathController::delete()
     */
    public function testDelete(): void
    {
        self::markTestIncomplete('Not implemented yet.');
    }
}
