<?php

$db = new SQLite3('database/database.sqlite');

$output = fopen('database/database.sql', 'w');

$tables = $db->query("
    SELECT name
    FROM sqlite_master
    WHERE type = 'table'
    AND name NOT LIKE 'sqlite_%'
    AND name != 'migrations'
");

while ($table = $tables->fetchArray(SQLITE3_ASSOC)) {

    $tableName = $table['name'];

    fwrite($output, "DROP TABLE IF EXISTS `$tableName`;\n");

    $columns = $db->query("PRAGMA table_info(`$tableName`)");

    $definitions = [];
    $primaryKeys = [];

    while ($column = $columns->fetchArray(SQLITE3_ASSOC)) {

        $name = $column['name'];
        $type = strtoupper(trim($column['type']));
        $notNull = (int) $column['notnull'];
        $primaryKey = (int) $column['pk'];

        if ($type === 'INTEGER') {
            $type = $primaryKey ? 'BIGINT UNSIGNED' : 'INT';
        } elseif ($type === 'VARCHAR') {
            $type = 'VARCHAR(255)';
        } elseif ($type === 'CHAR') {
            $type = 'CHAR(255)';
        } elseif ($type === 'REAL') {
            $type = 'DOUBLE';
        } elseif ($type === 'NUMERIC') {
            $type = 'DECIMAL(15,2)';
        } elseif ($type === 'BLOB') {
            $type = 'LONGBLOB';
        } elseif ($type === '') {
            $type = 'TEXT';
        }

        $definition = "`$name` $type";

        if ($primaryKey) {
            $primaryKeys[] = "`$name`";
        }

        if ($notNull && !$primaryKey) {
            $definition .= " NOT NULL";
        }

        $definitions[] = $definition;
    }

    if (!empty($primaryKeys)) {
        $definitions[] = "PRIMARY KEY (" . implode(", ", $primaryKeys) . ")";
    }

    fwrite(
        $output,
        "CREATE TABLE `$tableName` (\n    " .
        implode(",\n    ", $definitions) .
        "\n) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;\n"
    );

    $rows = $db->query("SELECT * FROM `$tableName`");

    while ($row = $rows->fetchArray(SQLITE3_ASSOC)) {

        $columnNames = [];
        $values = [];

        foreach ($row as $column => $value) {

            $columnNames[] = "`$column`";

            if ($value === null) {
                $values[] = "NULL";
            } else {
                $value = str_replace(
                    ["\\", "'"],
                    ["\\\\", "''"],
                    (string) $value
                );

                $values[] = "'$value'";
            }
        }

        fwrite(
            $output,
            "INSERT INTO `$tableName` (" .
            implode(", ", $columnNames) .
            ") VALUES (" .
            implode(", ", $values) .
            ");\n"
        );
    }

    fwrite($output, "\n");
}

fclose($output);
$db->close();

echo "DATABASE SQL BERHASIL DIBUAT!\n";