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
    public $MatComponent;

    /**
     * setUp method.
     */
    public function setUp() {
        parent::setUp();
        $this->MatComponent = new MatComponent(new ComponentCollection());
    }

    /**
     * tearDown method.
     */
    protected function tearDown(): void
    {
        unset($this->MathController);

        parent::tearDown();
    }

    public function testAdd() {
        $result = $this->MatComponent->add(2, 3);
        $this->assertEquals(5, $result);
    }
}
