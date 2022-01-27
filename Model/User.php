<?php

namespace ACS;

require '../Validator/Validator.php';

use Exception;

class User
{
    private int $id;
    private string $name;
    private string $email;
    private int $phone;
    private string $address;
    private string $date;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @throws Exception
     */
    public function setEmail(string $email): void
    {
        Validator::email($email);
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getPhone(): int
    {
        return $this->phone;
    }

    /**
     * @param int $phone
     *
     * @throws Exception
     */
    public function setPhone(int $phone): void
    {
        Validator::phone($phone);
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     *
     * @throws Exception
     */
    public function setDate(string $date): void
    {
        Validator::date($date);
        $this->date = $date;
    }
}
