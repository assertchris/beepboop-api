<?php

use Phinx\Migration\AbstractMigration;

class CreateSettingsTable extends AbstractMigration
{
    public function change()
    {
        $nullable = ["null" => true];

        $table = $this->table("settings");
        $table->addColumn("name", "string");
        $table->addColumn("value", "string");
        $table->addColumn("created_at", "datetime");
        $table->addColumn("deleted_at", "datetime", $nullable);
        $table->create();
    }
}
