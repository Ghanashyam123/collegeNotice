<?php
$name = $email = $age = $gender = $message = "";

$nameError = $emailError = $ageError = $genderError = $messageError = "";

$isValid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate Name
    if (empty($_POST["name"])) {
        $nameError = "Name is Required";
        $isValid = false;
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $emailError = "Email is Required";
        $isValid = false;
    } elseif (!filter_var($_POST["email"], filter:FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid Email Format";
        $isValid = false;
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    // Validate Age
    if (empty($_POST["age"]) || $_POST["age"] < 0) {
        $ageError = "Age is Required";
        $isValid = false;
    } elseif (!is_numeric($_POST["age"])) {
        $ageError = "Age must be a number";
        $isValid = false;
    } else {
        $age = htmlspecialchars($_POST["age"]);
    }

    // Validate Gender
    if (empty($_POST["gender"])) {
        $genderError = "Gender must be selected";
        $isValid = false;
    } else {
        $gender = htmlspecialchars($_POST["gender"]);
    }

    // Validate Message
    if (empty($_POST["message"])) {
        $messageError = "Message is Required";
        $isValid = false;
    } else {
        $message = htmlspecialchars($_POST["message"]);
    }

    if ($isValid) {
        echo "<h2>Form Submitted Successfully</h2>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Age: " . $age . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "Message: " . $message . "<br>";
    } else {
        echo "<h2>Please Correct the Errors Below:</h2>";
        echo "<p style='color: red;'>$nameError</p>";
        echo "<p style='color: red;'>$emailError</p>";
        echo "<p style='color: red;'>$ageError</p>";
        echo "<p style='color: red;'>$genderError</p>";
        echo "<p style='color: red;'>$messageError</p>";
    }
}
