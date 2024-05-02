<?php
require_once('address.php');
class Client extends Address
{
    private int $id;
    private string $first_name;
    private string $last_name;
    private string $birthday;
    private string $mail;
    private string $phone;



    public function __construct(string $first_name, string $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
    
    public function getAddress()
    {
        $this->$address = $address;
    }
};

