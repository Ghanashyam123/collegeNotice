<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies in Php</title>
</head>

<body>
    <h1>Cookie handling in PHP</h1>
    <br><br>

    <form method="get">

        <label for="username"> Username:</label>

        <input type="text" name="username" id="username">
        <br>
        <button type=" submit" name="action" value="set">Set Cookies</button>
        <button type="submit" name="action" value="get">Get Cookies</button>
        <button type="submit" name="action" value="delete">Delete Cookies</button>
    </form>

    <?php

    $cookie_name = "username";

    if (isset($_GET['action'])) {
        $action = $_GET['action'];

        if ($action == "set") {
            setcookie($cookie_name, value: "Nishan", expires_or_options: time() + (86400 * 30), path: "/"); // 86400 = 1 day
            echo "<p>Cookie named '" . $cookie_name . "' is set!</p>";
        } elseif ($action == "get") {
            if (isset($_COOKIE[$cookie_name])) {
                echo "<p>Cookie '" . $cookie_name . "' is: " . $_COOKIE[$cookie_name] . "</p>";
                echo "Value is " . $_COOKIE[$cookie_name] . "<br>";
            } else {
                echo "<p>Cookie '" . $cookie_name . "' is not set!</p>";
            }
        } elseif ($action == "delete") {
            setcookie($cookie_name, "", time() - 3600, "/");
            echo "<p>Cookie '" . $cookie_name . "' is deleted!</p>";
        }
    }

    ?>

</body>

</html>