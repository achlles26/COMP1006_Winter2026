<?php
//declare(strict_types=1);
declare(strict_types=1);
require "connect.php";

//1. Code Commenting 

//inline code 

/* 

multi-line code 

*/

//2. Variables, Data Types, Concatenation, Conditional Statements & Echo


$firstName = "Aquiles";
$lastName = "Sanchez";
$age = 27;
$isInstructor = false;

echo "<p>Hello there my name is ". $firstName. " ". $lastName. "</p>";

if($isInstructor) {

    echo "<p>Hello I am a teacher.</p>";
} else {

    echo "<p>Hello I am a student.</p>";    
}

//3. PHP is loosely typed 
$num1 = 10;
$num2 = "10";

function add($num1, $num2) {

    return $num1 + $num2;
}

echo "<p>". add($num1, $num2)."</p>";


//4. Strict Types & Types Hints
/* Add declare(strict_types=1) and type hints 
//strict types tell PHP not to automatically convert values when calling functions. Type hints tell PHP what to expect */

/*function add(int $num1, int $num2): int {
    return $num1 + $num2;
}
echo add($num1, $num2);
*/

//6. OOP with PHP 
class Person {
    public string $name;
    public int $age;
    public bool $isInstructor;

    public function __construct(string $name, int $age, bool $isInstructor){

        $this->name = $name;
        $this->age = $age;
        $this->isIntstructor = $isInstructor;
    }

    public function getBadge(): string {

        $role = $this->isInstructor ? "Instructor" : "Student";
        return "Name: {$this->name} | Age: {$this->Age} Role: $role";
    }
}

//create the class 
$person = new Person("Aquiles", 27, false);

echo $person->getBadge();
//create an instance of object 

//use the object 

