<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

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
        $registry = new ComponentRegistry();
        $this->Mat = new MatComponent($registry);
    }

    public function testAddNumbers()
    {
        // Call the method from the component
        $result = $this->Mat->addNumbers(3, 5);

        // Assert that the result is as expected
        $this->assertEquals(8, $result);
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
