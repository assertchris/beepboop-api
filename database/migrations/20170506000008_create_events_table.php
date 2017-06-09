<?php

use Phinx\Migration\AbstractMigration;

class CreateEventsTable extends AbstractMigration
{
    public function change()
    {
        $nullable = ["null" => true];

        $table = $this->table("events");
        $table->addColumn("serial_number", "string");
        $table->addColumn("event", "integer");
        $table->addColumn("value", "integer");
        $table->addColumn("created_at", "datetime");
        $table->addColumn("deleted_at", "datetime", $nullable);
        $table->create();
    }
}
