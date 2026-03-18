
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form handing</title>
</head>

<body>
    <h2>User Form validation</h2>

    <form action="process.php" method="post">
        <label for="name">Username:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email " id="email" name="email"> <br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age">
        <br><br>
        <label for="gender">Gender</label>
        <input type="radio" name="gender" id="male" value="male">male
        <input type="radio" name="gender" id="femele" value="female">female
        <br><br>
        <label for="message">Message:</label>
        <textarea name="message" id="message" rows="4" cols="50"></textarea>
        <br><br>

        <input type="submit" value="submit">
    </form>

</body>

</html>