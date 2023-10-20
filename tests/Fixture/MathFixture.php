<?php
namespace App\Test\Fixture;
use Cake\TestSuite\Fixture\TestFixture;
class ArticlesFixture extends TestFixture
{
    public $table = 'math';
    public $fields = [
        'id' => ['type' => 'integer', 'autoIncrement' => true],
        'number1' => ['type' => 'integer'],
        'number2' => ['type' => 'integer'],
        'created' => ['type' => 'datetime'],
        'modified' => ['type' => 'datetime'],
    ];
    public $records = [
        [
            'number1' => 2,
            'number2' => 4,
            'created' => '2023-03-08 12:00:00',
            'modified' => '2023-03-08 12:00:00',
        ],
        [
            'number1' => 5,
            'number2' => 9,
            'created' => '2023-03-08 12:00:00',
            'modified' => '2023-03-08 12:00:00',
        ],
    ];
}