<?php

declare(strict_types=1);

namespace App\Database;

class DatabaseOps
{
    public static function connect()
    {
        return new \PDO(
            "mysql:host=localhost;dbname=todo_php",
            'edson',
            '123456',
            [\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ]
        );
    }

    public function fetchAll(
        \PDO $connection,
        string $table,
        string $table_name,
        string $fields,
        string $field_values
    ): ?array {
        try {
            $query = $connection->prepare("SELECT :{$fields} FROM :{$table};");

            $query->execute([$table => $table_name, $fields => $field_values]);

            return $query->fetchAll();
        } catch (\PDOException $e) {
            var_dump($e->getMessage(), $e->getCode());
        }
    }

    public function fetchBy(
        \PDO $connection,
        string $table,
        string $field,
        string $value,
        string $fields = '*'
    ): mixed {
        try {
            $prepare = $connection->prepare(
                "SELECT {$fields} FROM {$table} WHERE {$field} = :{$field};"
            );
            $prepare->execute(
                array(
                    $field => $value,
                )
            );

            return $prepare->fetch();
        } catch (\PDOException $e) {
            var_dump($e->getMessage());
        }
    }
}
