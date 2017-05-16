<?php
use Migrations\AbstractMigration;

class AddCapacityToDepts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('depts');
        $table->addColumn('capacity', 'integer', [
            'default' => null,
            'limit' => 8,
            'null' => true,
        ]);
        $table->update();
    }
}
