<?php

interface Parent1
{
    function firstName(): string;
}

interface Parent2
{
    function lastName(): string;
}

class Introduction implements Parent1, Parent2
{

    function firstName(): string
    {
        return "First Name is : Muhammad";
    }

    function lastName(): string
    {
        return "Last Name is : Mudassir";
    }

    function __construct()
    {
        echo "Introduction dena ha";
    }
}

/*
$Person1 = new Introduction();
echo "<br>";
echo $Person1->firstName();
echo "<br>";
echo $Person1->lastName();
*/


class myStatic
{
    public static $staic_value = "This is a static variable";

    public static function printStatic()
    {
        echo  self::$staic_value;
    }
}


// echo myStatic::$staic_value;
// myStatic::printStatic();

trait Hello
{
    public function Greeting(): string
    {
        return "Good Morning";
    }
}

trait By
{
    public function goodBy(): string
    {
        return "Chaly jaOOOooo.";
    }
}

class A{
    use Hello;
    use By;
}

$A1 = new A();

echo $A1->Greeting();
echo "<br>";
echo $A1->goodBy();
