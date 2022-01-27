<?php

namespace ACS;

use mysqli;

class MySql
{
    private const SERVER = 'localhost';
    private const DATABASE = 'homestead';
    private const USERNAME = 'homestead';
    private const PASSWORD = 'secret';
    private const PORT = 33061;

    public function database(): ?mysqli
    {
        $conn = mysqli_connect(self::SERVER, self::USERNAME, self::PASSWORD,self::DATABASE ,self::PORT);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }
}
