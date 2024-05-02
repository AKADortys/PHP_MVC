<?php
class Order{
    private int $id;
    private DateTime $created;

    private int $client_id;
    private string $to_first_name;
    private string $to_last_name;

    private string $street;
    private string $number;
    private string $city;
    private string $country;
    private string $zip_code;
    private array $items;
}