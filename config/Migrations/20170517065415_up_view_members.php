<?php

use Phinx\Migration\AbstractMigration;

class UpViewMembers extends AbstractMigration
{
    public function up()
    {
        $count = $this->execute(
            'create view view_members as
            select m.id, m.name, d.name as dept_name, m.participation_date
            from members m inner join depts d on m.dept_id = d.id;'
        );
    }

    public function down()
    {
        $count = $this->execute('drop view view_members;');
    }
}
