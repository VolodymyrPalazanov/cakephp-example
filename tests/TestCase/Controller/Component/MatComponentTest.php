<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\MatComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\MathComponent Test Case
 */
class MatComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\MatComponent
     */
    public $Mat;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $controller = new Controller();
        $registry = new ComponentRegistry();
        $this->Mat = new MatComponent($registry);
    }
    public function testAddNumbers()
    {
        // Create an instance of the controller
        $this->Mat = new MathController();

        // Call the controller action
        $result = $this->Mat->addNumbers();

        // Assert that the result is as expected
        $this->assertEquals(8, $this->Mat->viewVars['result']);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Mat);

        parent::tearDown();
    }
}
