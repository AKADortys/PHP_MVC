<?php

abstract class Address{
    private string $street;
    private string $number;
    private string $city;
    private string $country;
    private string $zip_code;

    
    public function setAddress (string $street, string $number, string $city, string $country, string $zip_code )
    {
        $this->street = $street; 
        $this->number = $number; 
        $this->city = $city; 
        $this->country = $country; 
        $this->zip_code = $zip_code; 
    }
}