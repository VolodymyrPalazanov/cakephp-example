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
    public function testAddNumbers(): void
    {
        $this->get('/math/addNumbers');

        // Assert that the response status code is 200 (OK)
        $this->assertResponseOk(); // Check that the response status code is 200
        $this->assertResponseContains('Number 1:'); // Check that the response contains expected content
        $this->assertResponseContains('Number 2:');
        $this->assertResponseContains('Sum:');
    }

    /**
     * Test index method.
     *
     * @uses \App\Controller\MathController::index()
     */
    public function testIndex(): void
    {
        $this->get('/math/index');
        $this->assertResponseOk();
    }

    /**
     * Test view method.
     *
     * @uses \App\Controller\MathController::view()
     */
    public function testView(): void
    {
        $this->get('/math/view');
        $this->assertResponseOk();
    }

    /**
     * Test add method.
     *
     * @uses \App\Controller\MathController::add()
     */
    public function testAdd(): void
    {
        $data = [
            'number1' => 5,
            'number2' => 7,
        ];
    
        $this->post('/math/add', $data);
    
        // Perform assertions for the specific behavior you want to test
        $this->assertRedirect(['action' => 'index']);
        $this->assertFlashElement('Flash/success');
    }

    /**
     * Test edit method.
     *
     * @uses \App\Controller\MathController::edit()
     */
    public function testEdit(): void
    {
        $this->get('/math/edit');
        $this->assertResponseOk();
    }

    /**
     * Test delete method.
     *
     * @uses \App\Controller\MathController::delete()
     */
    public function testDelete(): void
    {
        $this->get('/math/delete');
        $this->assertResponseOk();
    }
}
