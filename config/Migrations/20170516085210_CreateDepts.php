<?php
use Migrations\AbstractMigration;

class CreateDepts extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('depts');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->create();
    }
}
