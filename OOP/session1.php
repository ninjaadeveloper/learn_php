<?php

class Animal{
    public $name;
    public $eating;

    function setName($name){
        $this->name = $name;
    }

    function getName(){
        return $this->name;
    }

    function setEating($eating){
        $this->eating = $eating;
    }

    function getEating(){
        return $this->eating;
    }
}

$Tiger = new Animal();

$Tiger->setName('Tiger');
$Tiger->setEating('Meat');


echo $Tiger->getName() . "<br>";
echo $Tiger->getEating(). "<br>";

echo "<hr>";

$Goat = new Animal();

$Goat->setName('Gulabii Goat');
$Goat->setEating('Grass');

echo $Goat->getName(). "<br>";
echo $Goat->getEating(). "<br>";

?>