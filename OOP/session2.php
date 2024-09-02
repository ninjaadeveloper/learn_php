<?php

class Car
{

    public $company;
    public $model;

    function setCompany($mycompany)
    {
        $this->company = $mycompany;
    }

    function setModel($mymodel)
    {
        $this->model = $mymodel;
    }

    function getCompany()
    {
        return $this->company;
    }

    function getModel()
    {
        return $this->model;
    }
};


$honda = new Car();

$honda->setCompany('Honda');
$honda->setModel('City');


echo $honda->getCompany() . ' | ' . $honda->getModel();

echo '<hr>';


$suzuki = new Car();


$suzuki->setCompany('Suzuki');
$suzuki->setModel('Swift');

echo $suzuki->getCompany() . ' | ' . $suzuki->getModel();

echo "<hr>";

echo $suzuki instanceof Car . "<br>";
echo "<hr>";

class Animal
{
    public $name;
    public $eating;
    public $voice;

    function __construct($name, $eating, $voice)
    {
        $this->name = $name;
        $this->eating = $eating;
        $this->voice = $voice;
    }


    // function getDetails()
    // {
    //     return "This is " . $this->name . " , eating is ". $this->eating . " and voice is " . $this->voice ;
    // }


    function __destruct()
    {
        echo  "This is " . $this->name . " , eating is " . $this->eating . " and voice is " . $this->voice . "<br>";
    }
}

// $tiger = new Animal('Tiger', 'Meat', 'Roaring');
// $goat = new Animal('Goat', 'Grass', 'Mee Mee');

// echo $tiger->getDetails() . '<br>';
// echo $goat->getDetails() . '<br>';



// var_dump($suzuki instanceof Animal);


echo "<hr>";


class Course
{
    public $name = "Javascript";
    private $duration = "3 mnths";
    protected $code = "JS";
}


$javascript = new Course();

echo $javascript->name;
// echo $javascript->duration; //error
// echo $javascript->code; //error
