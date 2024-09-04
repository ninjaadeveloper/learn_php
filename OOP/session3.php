<?php

class person
{
    public $person_name;
    public $person_age;
    public $person_gender;


    function setValues($name, $age, $gender)
    {
        $this->person_name = $name;
        $this->person_age = $age;
        $this->person_gender = $gender;
    }

    //    function printData()
    //    private function printData()
    protected function printData()
    {
        echo "Name is " . $this->person_name . " , person age " . $this->person_age . " and gender is  " . $this->person_gender;
    }
}

// $teacher = new person();
// $teacher->setValues('Affan',22,'M');
// $teacher->printData();


class teacher extends person
{
    public $education;

    function setEducation($edu)
    {
        $this->education = $edu;
    }

    function getEducation()
    {
        echo $this->education;
    }

    function __destruct()
    {
        $this->printData();
    }
}

// $teacher1 = new teacher();

// $teacher1->setValues('Affan',22,'M');

// $teacher1->printData();
// echo "<br>";
// echo $teacher1->education;

/* $teacher2 = new teacher();
$teacher2->setValues('Mudassir',26,'M');
$teacher2->setEducation('MCS');
$teacher2->printData();
echo "<br>";
$teacher2->getEducation();
*/


abstract class car
{
    public $company;
    public $modal;

    function __construct($company_name, $car_modal)
    {
        $this->company = $company_name;
        $this->modal = $car_modal;
    }

   abstract function getData(): string;
}

class honda extends car{
    function getData():string{
        return 'Fatest seedan in pakistan';
    }
}

$civic  =new honda('Honda','2024');
// echo $civic->getData();

class toyota extends car{
    function getData(): string
    {
        return "Our Grandee is fastest than other";
    }
}
/*
$grandee = new toyota('Toyota',"2024");

echo $grandee->getData();

*/


final class food
{
    function __construct(){
        echo "Biryani is best";
    }
}

// class myfood extends food{
//     function __construct(){
//         echo "White Karahi is best";
//     }
// }

$f = new food();
// $f = new myfood();