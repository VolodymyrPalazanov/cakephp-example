<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\MathController; // Poprawa: Import kontrolera, który ma być testowany
use App\Controller\Component\MatComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\MatComponent Test Case
 */
class MatComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\MathController
     */
    public $MathController; // Poprawa: Zmiana nazwy zmiennej na MathController

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Tworzenie instancji kontrolera
        $registry = new ComponentRegistry();
        $this->MathController = new MathController($registry); // Poprawa: Przekazanie ComponentRegistry do kontrolera
    }

    public function testAddNumbers()
    {
        // Call the controller action
        $result = $this->MathController->addNumbers();

        // Get the view vars from the controller
        $viewVars = $this->MathController->viewVars;

        // Assert that the result is as expected
        $this->assertEquals(13, $viewVars['sum']); // Poprawa: Sprawdzenie wyniku na podstawie zmiennych widoku
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MathController);

        parent::tearDown();
    }
}
