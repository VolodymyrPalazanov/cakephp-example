<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Ruminski <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Test\TestCase\Controller;

use Cake\Event\EventInterface;
use Cake\TestSuite\Constraint\Response\StatusCode;
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
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Math',
    ];

    public function setUp(): void
    {
        parent::setUp();
        // Additional setup code goes here
    }

    public function tearDown(): void
    {
        // Additional teardown code goes here
        parent::tearDown();
    }

    /**
     * Test that the "addNumbers" action renders correctly.
     */
    public function testAddNumbers()
    {
        $this->get('/math/addNumbers');

        $this->assertResponseOk();
    }

    /**
     * Test adding numbers via the "add" action.
     */
    public function testAdd()
    {
        $this->get('/math/add'); 
        $data = [
            'number1' => 5,
            'number2' => 7,
        ];

        $this->post('/math/add', $data);

        $this->assertResponseSuccess();
        $this->assertResponseContains('The math has been saved');
    }

    public function testEdit()
    {
        $entityId = 4;
        $data = [
            'number1' => 10,
            'number2' => 15,
        ];

        $this->post('/math/edit/' . $entityId, $data);

        $this->assertResponseSuccess();
        $this->assertResponseContains('The math has been saved');
    }

    public function testDelete()
    {
        $entityId = 4; 

        $this->post('/math/delete/' . $entityId);

        $this->assertResponseSuccess();
        $this->assertResponseContains('The math has been deleted');
    }
}