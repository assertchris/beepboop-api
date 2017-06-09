<?php

use Phinx\Migration\AbstractMigration;

class CreateInvoicesTable extends AbstractMigration
{
    public function change()
    {
        $nullable = ["null" => true];

        $table = $this->table("invoices");
        $table->addColumn("usage", "integer");
        $table->addColumn("rate", "integer");
        $table->addColumn("paid", "boolean", ["default" => false]);
        $table->addColumn("device_id", "integer");
        $table->addColumn("measurement_id", "integer");
        $table->addColumn("group_id", "integer");
        $table->addColumn("created_at", "datetime");
        $table->addColumn("updated_at", "datetime", $nullable);
        $table->addColumn("deleted_at", "datetime", $nullable);
        $table->create();
    }
}
