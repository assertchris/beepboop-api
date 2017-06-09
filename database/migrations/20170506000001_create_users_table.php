<?php

use Phinx\Migration\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{
    public function change()
    {
        $nullable = ["null" => true];

        $table = $this->table("users");
        $table->addColumn("name", "string", $nullable);
        $table->addColumn("phone", "string", $nullable);
        $table->addColumn("address", "text", $nullable);
        $table->addColumn("email", "string");
        $table->addColumn("password", "string", $nullable);
        $table->addColumn("token", "string", $nullable);
        $table->addColumn("type", "integer", ["null" => true, "default" => 1]);
        $table->addColumn("created_at", "datetime");
        $table->addColumn("updated_at", "datetime", $nullable);
        $table->addColumn("deleted_at", "datetime", $nullable);
        $table->create();
    }
}
