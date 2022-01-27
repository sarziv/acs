<?php

namespace ACS;

require '../Model/User.php';
require '../Database/MySql.php';

class PrintRecord extends MySql
{
    public function run(string $from, string $to): void
    {
        $result = $this->database()->query("SELECT * FROM Users WHERE date between {$from} and {$to} ORDER BY date DESC");
        while ($row = $result->fetch_array()) {
            print_r($row);
        }
        $result->close();
        $this->database()->close();
    }
}

$print = new PrintRecord();
echo 'Enter from date' . PHP_EOL;
$from = readline();
echo 'Enter to date' . PHP_EOL;
$to = readline();
$print->run($from, $to);
