<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MathFixture
 */
class MathFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'math';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'Number1' => 1,
                'Number2' => 1,
                'created' => '2023-10-11 10:07:46',
                'modified' => '2023-10-11 10:07:46',
            ],
        ];
        parent::init();
    }
}
