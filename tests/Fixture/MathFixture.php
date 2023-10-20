<?php
namespace App\Test\Fixture;
use Cake\TestSuite\Fixture\TestFixture;
class MathFixture extends TestFixture
{
    public function init(): void
    {
        $this->fields = [
            'id' => ['type' => 'integer', 'autoIncrement' => true],
            'number1' => ['type' => 'integer'],
            'number2' => ['type' => 'integer'],
            'created' => ['type' => 'datetime'],
            'modified' => ['type' => 'datetime'],
        ];
        $this->records = [
            [
                'number1' => 2,
                'number2' => 4,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'number1' => 5,
                'number2' => 9,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
        ];
        parent::init();
    }
}