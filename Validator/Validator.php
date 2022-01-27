<?php

namespace ACS;

use Exception;

class Validator
{
    public static function email(?string $email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new  Exception('invalid email');
        }
    }

    public static function phone(?int $phone)
    {
        if (!is_int($phone)) {
            throw new Exception('invalid phone');
        }
    }

    public static function date(string $date = '')
    {
        if (!strtotime($date)) {
            throw new  Exception('invalid date');
        }
    }
}
