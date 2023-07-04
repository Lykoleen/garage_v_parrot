<?php

namespace App\Models;

class CarModel extends Model {

    private int $ref;
    private string $title;
    private int $years;
    private int $price;
    private int $mileage;
    private string $description;

    public function __construct()
    {
        $this->table = 'car';
    }

    public function presentation()
    {
        var_dump("$this->ref - $this->title de $this->years, $this->mileage kms à $this->price €. $this->description");
    }

    public function getRef(): int
    {
        return $this->ref;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
       $this->title = $title;
    }
}