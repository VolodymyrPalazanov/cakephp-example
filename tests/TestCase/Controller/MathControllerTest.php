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

use Cake\ORM\TableRegistry;
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
    /**
     * Fixtures
     *
     * @var array<string>
     */
    // protected array $fixtures = [
    //     'app.Math',
    // ];
    use IntegrationTestTrait;
    protected $Math;
    public function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
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

    // public function testAdd(): void
    // {
    //     $this->enableCsrfToken();
    //     $this->enableSecurityToken();
    //     $this->post('/math/add', ['number1' => 5, 'number2' => 3]);
    //     $this->assertResponseSuccess();
    // }

    // public function testEdit(): void
    // {
    //     $entityId = 1; 
    //     $this->get('/math/edit/' . $entityId); 
    //     $this->assertResponseOk();
    //     $this->assertResponseContains('The math has been saved');
    // }

    // public function testDelete(): void
    // {
    //     $entityId = 1; 
    //     $this->post('/math/delete/' . $entityId);
    //     $this->assertResponseOk();
    //     $this->assertResponseContains('The math has been deleted');
    // }
}