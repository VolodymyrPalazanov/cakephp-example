<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class Math extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
    }
    public function up()
    {
        $table = $this->table('math');
        $table
        ->addColumn('id', 'integer', ['autoIncrement' => true, 'null' => false])
        ->addColumn('number1', 'integer', ['length' => 255, 'null' => false])
        ->addColumn('number2', 'integer', ['length' => 255, 'null' => false])
        ->addColumn('created', 'datetime', ['default' => null, 'null' => false])
        ->addColumn('modified', 'datetime', ['default' => null, 'null' => false])
        ->addPrimaryKey(['id'])
        ->create();
    }
}
