<?php

use Phinx\Migration\AbstractMigration;

class CreateStatusesTable extends AbstractMigration
{
    public function change()
    {
        $nullable = ["null" => true];

        $table = $this->table("statuses");
        $table->addColumn("serial_number", "string");
        $table->addColumn("firmware_version", "integer", $nullable);
        $table->addColumn("primary_at", "datetime", $nullable);
        $table->addColumn("secondary_at", "datetime", $nullable);
        $table->addColumn("secondary_start", "integer", $nullable);
        $table->addColumn("secondary_duration", "integer", $nullable);
        $table->addColumn("usage", "integer", $nullable);
        $table->addColumn("battery_voltage", "integer", $nullable);
        $table->addColumn("flags", "integer", $nullable);
        $table->addColumn("created_at", "datetime");
        $table->addColumn("deleted_at", "datetime", $nullable);

        $table->create();
    }
}
