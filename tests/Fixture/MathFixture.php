<?php
namespace App\Test\Fixture;
use Cake\TestSuite\Fixture\TestFixture;
class MathFixture extends TestFixture
{
    public function init(): void
    {
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