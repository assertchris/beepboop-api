<?php

use Phinx\Migration\AbstractMigration;

class CreateDevicesTable extends AbstractMigration
{
    public function change()
    {
        $nullable = ["null" => true];

        $table = $this->table("devices");

        // mine
        $table->addColumn("serial_number", "string");
        $table->addColumn("secondary_start_at", "datetime", $nullable);
        $table->addColumn("secondary_duration", "integer", $nullable);
        $table->addColumn("customer_id", "integer", $nullable);
        $table->addColumn("group_id", "integer", $nullable);
        $table->addColumn("created_at", "datetime");
        $table->addColumn("updated_at", "datetime", $nullable);
        $table->addColumn("deleted_at", "datetime", $nullable);

        // theirs
        $table->addColumn("last_status", "datetime", $nullable);
        $table->addColumn("firmware_version", "integer", $nullable);
        $table->addColumn("usage", "integer", $nullable);
        $table->addColumn("battery_voltage", "integer", $nullable);
        $table->addColumn("flags", "integer", $nullable);
        $table->addColumn("primary_enabled", "boolean", $nullable);
        $table->addColumn("primary_report_on_day", "integer", $nullable);
        $table->addColumn("primary_report_hour", "integer", $nullable);
        $table->addColumn("primary_report_minute", "integer", $nullable);
        $table->addColumn("primary_report_second", "integer", $nullable);
        $table->addColumn("secondary_enabled", "boolean", $nullable);
        $table->addColumn("secondary_interval", "integer", $nullable);
        $table->addColumn("check_in_period", "integer", $nullable);
        $table->addColumn("force_reset", "integer", $nullable);
        $table->addColumn("bootloader_inhibit", "integer", $nullable);

        $table->create();
    }
}
