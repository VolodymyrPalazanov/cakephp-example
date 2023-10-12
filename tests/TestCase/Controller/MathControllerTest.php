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
     * Define the controller to use in the test
     *
     * @var string
     */
    public $controller = 'Math';

    /**
     * Disable CSRF protection for the 'add' action.
     *
     * @var array
     */
    public $csrfWhitelist = ['add'];

    public function setUp(): void
    {
        parent::setUp();
        
    }

    /**
     * Test that the "addNumbers" action renders correctly.
     */
    public function testAddNumbers(): void
    {
        $this->get('/math/addNumbers');

        $this->assertResponseOk();
    }
    private function getCsrfToken()
    {
        $token = $this->_session['request']['environment']['REQUEST_METHOD'] === 'POST' ? $this->_session['request']['data']['_csrfToken'] : '';
        return $token;
    }


    /**
     * Test adding numbers via the "add" action.
     */
    public function testAdd()
    {
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
        $entityId = 4; // Replace with an existing ID
        $data = [
            'number1' => 10, // New values
            'number2' => 15,
        ];

        $this->post('/math/edit/' . $entityId, $data);

        // Assertions for a successful edit
        $this->assertResponseSuccess();
        $this->assertResponseContains('The math has been saved');
        // You may also add more specific assertions as needed
    }

    public function testDelete()
    {
        $entityId = 1; // Replace with an existing ID

        $this->post('/math/delete/' . $entityId);

        // Assertions for a successful delete
        $this->assertResponseSuccess();
        $this->assertResponseContains('The math has been deleted');
        // You may also add more specific assertions as needed
    }
}