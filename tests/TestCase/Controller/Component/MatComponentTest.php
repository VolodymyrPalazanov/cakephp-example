<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\MatComponent;
use Cake\Controller\ComponentRegistry;
use Cake\Controller\Controller;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\MatComponent Test Case
 */
class MatComponentTest extends TestCase
{
    use IntegrationTestTrait;
    /**
     * Test subject
     *
     * @var \App\Controller\Component\MatComponent
     */
    protected $Mat;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $request = $this->getMockBuilder(\Cake\Http\ServerRequest::class)
        ->getMock();
        $controller = new Controller($request);
        $registry = new ComponentRegistry($controller); // Pass the controller instance to ComponentRegistry

        $this->Mat = new MatComponent($registry);
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

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\Component\MatComponent::add()
     */
    public function testAdd(): void
    {
        $result = $this->Mat->add(2,3);
        $this->assertEquals(5, $result);
    }
}
