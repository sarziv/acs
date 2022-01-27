<?php

namespace ACS;

use Exception;

require '../Model/User.php';
require '../Database/MySql.php';

class Edit extends MySql
{
    public function run(int $id, User $user): void
    {
        $this->database()->query("UPDATE Users 
                                    SET 
                                    name=`{$user->getName()}`,
                                    email=`{$user->getEmail()}`,
                                    phone=`{$user->getPhone()}`,
                                    address=`{$user->getAddress()}`,
                                    date=`{$user->getDate()}`,
                                  WHERE id={$id}");
        $this->database()->close();
    }

    public function exists(int $id): void
    {
        if (mysqli_fetch_assoc($this->database()->query("SELECT 1 FROM Visma WHERE id={$id}")) != 1) {
            $this->database()->close();
            throw new Exception('No record exists');
        }
    }
}

$edit = new Edit();
echo 'Enter id' . PHP_EOL;
$id = (int)readline();
$edit->exists($id);
echo '----------------------' . PHP_EOL;
$user = new User();
echo 'Enter name' . PHP_EOL;
$user->setName(readline());
echo 'Enter email' . PHP_EOL;
$user->setEmail(readline());
echo 'Enter phone' . PHP_EOL;
$user->setPhone((int)readline());
echo 'Enter address' . PHP_EOL;
$user->setAddress(readline());
echo 'Enter date' . PHP_EOL;
$user->setDate(readline());

$edit->run($id, $user);
