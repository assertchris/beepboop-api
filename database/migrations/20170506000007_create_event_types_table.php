<?php

use Phinx\Migration\AbstractMigration;

class CreateEventTypesTable extends AbstractMigration
{
    public function change()
    {
        $nullable = ["null" => true];

        $table = $this->table("event_types");
        $table->addColumn("name", "string");
        $table->addColumn("created_at", "datetime");
        $table->addColumn("updated_at", "datetime", $nullable);
        $table->addColumn("deleted_at", "datetime", $nullable);
        $table->create();
    }
}
