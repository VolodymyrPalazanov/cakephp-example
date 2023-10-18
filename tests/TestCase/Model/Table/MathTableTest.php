<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MathTable;
use Cake\TestSuite\TestCase;
use Cake\ORM\TableRegistry;

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

    public $MathTable;
    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Math') ? [] : ['className' => MathTable::class];
        $this->MathTable = TableRegistry::getTableLocator()->get('Math', $config);
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
        $validator = new \Cake\Validation\Validator();
        $validator = $this->MathTable->validationDefault($validator);

        // Check the validation rules
        $this->assertTrue($validator->hasField('Number1'));
        $this->assertTrue($validator->hasField('Number2'));
    }
}
