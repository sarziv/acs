<?php

namespace ACS;

require '../Database/MySql.php';

class Delete extends MySql
{
    public function run(int $id): void
    {
        $this->database()->query("DELETE FROM Users WHERE id={$id}");
        $this->database()->close();
    }
}

echo 'Enter id' . PHP_EOL;
$delete = new Delete();
$delete->run((int)readline());
