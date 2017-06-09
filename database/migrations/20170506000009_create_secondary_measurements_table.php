<?php

use Phinx\Migration\AbstractMigration;

class CreateSecondaryMeasurementsTable extends AbstractMigration
{
    public function change()
    {
        $nullable = ["null" => true];

        $table = $this->table("secondary_measurements");

        // mine
        $table->addColumn("serial_number", "string");
        $table->addColumn("usage", "integer");
        $table->addColumn("battery_voltage", "integer");
        $table->addColumn("created_at", "datetime");

        // theirs
        $table->addColumn("reported_at", "datetime", $nullable);
        $table->addColumn("raw1", "integer", $nullable);
        $table->addColumn("raw2", "integer", $nullable);
        $table->addColumn("raw3", "integer", $nullable);
        $table->addColumn("raw4", "integer", $nullable);
        $table->addColumn("raw5", "integer", $nullable);
        $table->addColumn("raw6", "integer", $nullable);
        $table->addColumn("raw7", "integer", $nullable);
        $table->addColumn("raw8", "integer", $nullable);

        $table->create();
    }
}
