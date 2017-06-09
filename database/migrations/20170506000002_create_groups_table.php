<?php

use Phinx\Migration\AbstractMigration;

class CreateGroupsTable extends AbstractMigration
{
    public function change()
    {
        $nullable = ["null" => true];

        $table = $this->table("groups");
        $table->addColumn("name", "string");
        $table->addColumn("technician_id", "integer", $nullable);
        $table->addColumn("administrator_id", "integer", $nullable);
        $table->addColumn("created_at", "datetime");
        $table->addColumn("updated_at", "datetime", $nullable);
        $table->addColumn("deleted_at", "datetime", $nullable);
        $table->create();
    }
}
