<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $img = $_POST['image'];
// connection


}
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new notice</title>
</head>
<body>
    <h2>Add NEw Notice </h2>
    <button>Back</button>
     <form method="post" action="">
    <fieldset>
        <legend>Add new</legend>
        <label>Title</label>
        <input type="text" name="title" /> <br> <br>
         <label>Description</label>
        <textarea name="description" > </textarea><br> <br>
         <label>Image</label>
        <input type="file" name="image" /> <br> <br>
        <input type="submit" name="submit" value="submit">
    </fieldset>
     </form>
</body>
</html>