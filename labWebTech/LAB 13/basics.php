<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>
    <?php
    // Simple PHP output
    echo "<h1>Hello, World!</h1>";

    // Variables and data types
    $intvar = 10;
    $floatvar = 10.5;
    $stringvar = "Hello, World!";
    $boolvar = true;

    echo "<p>Integer: $intvar</p>";
    echo "<p>Float: $floatvar</p>";
    echo "<p>String: $stringvar</p>";
    echo "<p>Boolean: $boolvar</p>";

    // String operations
    $firstName = "Nishan";
    $lastName = "Dhakal";
    $fullName = $firstName . " " . $lastName;
    echo "<p>Full Name: $fullName</p>";

    $city = "Kathmandu";
    $country = "Nepal";
    echo "<p>I live in $city, $country.</p>";

    // Constants
    define("PI", 3.14);
    const GRAVITY = 9.81;
    echo "<p>Value of PI: " . PI . "</p>";
    echo "<p>Value of GRAVITY: " . GRAVITY . "</p>";

    // Arithmetic operators
    $sum = 5 + 3;
    $product = 6 * 7;
    echo "<p>Sum: $sum</p>";
    echo "<p>Product: $product</p>";

    // Control structures
    $age = 18;
    echo $age >= 18 ? "<p>You are an adult.</p>" : "<p>You are a minor.</p>";

    // Loops
    echo "<p>While Loop:</p>";
    $i = 1;
    while ($i <= 5) {
        echo "Number: $i<br>";
        $i++;
    }

    echo "<p>For Loop:</p>";
    for ($j = 1; $j <= 5; $j++) {
        echo "Number: $j<br>";
    }

    echo "<p>Do-While Loop:</p>";
    $k = 1;
    do {
        echo "Number: $k<br>";
        $k++;
    } while ($k <= 5);

    // Functions
    function multiply($a, $b)
    {
        return $a * $b;
    }

    function calculate($a, $b)
    {
        return [$a + $b, $a - $b];
    }

    echo "<p>Multiply: " . multiply(4, 5) . "</p>";
    list($sum, $diff) = calculate(10, 20);
    echo "<p>Sum: $sum</p>";
    echo "<p>Difference: $diff</p>";

    // Arrays
    $colors = ["Red", "Black", "White"];
    echo "<p>First Color: " . $colors[0] . "</p>";

    $person = [
        "name" => "Nishan Dhakal",
        "age" => 21,
        "faculty" => "BSc.CSIT"
    ];
    echo "<p>Name: " . $person["name"] . ", Age: " . $person["age"] . ", Faculty: " . $person["faculty"] . "</p>";

    $students = [
        ["name" => "Nishan", "age" => 20],
        ["name" => "Amit", "age" => 20],
        ["name" => "Raut", "age" => 20]
    ];
    foreach ($students as $student) {
        echo "<p>Student: " . $student["name"] . ", Age: " . $student["age"] . "</p>";
    }

    // OOP in PHP
    class Student
    {
        public $name;
        private $id;
        protected $grade = "A";

        public function __construct($name, $id)
        {
            $this->name = $name;
            $this->id = $id;
        }

        public function getInfo()
        {
            return "Name: " . $this->name . ", ID: " . $this->id;
        }

        public function getGrade()
        {
            return "Grade: " . $this->grade;
        }
    }

    $nishan = new Student("Nishan", 11);
    echo "<p>" . $nishan->getInfo() . "</p>";
    echo "<p>" . $nishan->getGrade() . "</p>";
    ?>
</body>

</html>