<?php

require_once __DIR__ . "/environment.php";

$host = getenv("DB_HOST");
$port = getenv("DB_PORT");
$database = getenv("DB_DATABASE");
$username = getenv("DB_USERNAME");
$password = getenv("DB_PASSWORD");

$connection = new PDO(
    "mysql:host={$host};port={$port};dbname={$database}",
    $username, $password,
    [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
);

return [
    "environments" => [
        "default_database" => "default",
        "default_migration_table" => "migrations",
        "default" => [
            "name" => "beepboop",
            "connection" => $connection
        ]
    ],
    "paths" => [
        "migrations" => BASE_PATH . "/database/migrations"
    ]
];
