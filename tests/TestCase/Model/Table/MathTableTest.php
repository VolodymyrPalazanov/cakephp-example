<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MathTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MathTable Test Case
 */
class MathTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MathTable
     */
    protected $Math;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected array $fixtures = [
        'app.Math',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Math') ? [] : ['className' => MathTable::class];
        $this->Math = $this->getTableLocator()->get('Math', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Math);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MathTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
