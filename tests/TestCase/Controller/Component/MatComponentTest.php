<?php

declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\MathController;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\MatComponent Test Case.
 */
class MatComponentTest extends TestCase
{
    /**
     * Test subject.
     *
     * @var \App\Controller\MathController
     */
    public $MathController;

    /**
     * setUp method.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Create an instance of the real MathController
        $this->MathController = new MathController();
    }

    /**
     * tearDown method.
     */
    protected function tearDown(): void
    {
        unset($this->MathController);

        parent::tearDown();
    }

    public function testAddNumbers(): void
    {
        // Call the controller action
        $result = $this->MathController->addNumbers();

        // Get the view vars from the controller
        $viewVars = $this->MathController->viewVars;

        // Assert that the result is as expected
        self::assertSame(13, $viewVars['sum']);
    }
}
