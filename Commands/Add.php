<?php

namespace ACS;

require '../Model/User.php';
require '../Database/MySql.php';

class Add extends MySql
{
    public function run(User $user) : void
    {
        $this->database()->query("INSERT INTO Users (name, email, phone, address, date) VALUES (
                                                              `{$user->getName()}`,
                                                              `{$user->getEmail()}`,
                                                              `{$user->getPhone()}`),
                                                              `{$user->getAddress()}`,
                                                             `{$user->getDate()}`"
        );
        $this->database()->close();
    }
}

/** Not handling exception on cli, as we don't have problem with that */
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

$add = new Add();
$add->run($user);
