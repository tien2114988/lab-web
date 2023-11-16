<?php
class Product
{
    private $ID;
    private $name;
    private $description;
    private $price;
    private $image;

    public function __construct($ID, $name, $description, $price, $image)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
    }

    public function toString()
    {
        return "ID: $this->ID, Name: $this->name, Description: $this->description, Price: $this->price, Image: $this->image";
    }

    public function getID(){
        return $this->ID;
    }

    public function getName(){
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }
    public function getImage()
    {
        return $this->image;
    }
}
