<?php
session_start();
if(isset($_SESSION['username'])){
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $img = $_FILES['image'];

     // file uploading 
     if(isset($_FILES['image'])){
        $uploadDirectory = 'images/';
        $fileName = basename($_FILES['image']['name']);
        $targetFilePath = $uploadDirectory . $fileName;
        move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);
     }

   $conn = mysqli_connect("localhost","root","root","notice"); 
   
   $sql = "INSERT INTO noticeRecord(title,description,image) VALUES('$title','$description','$fileName')";

   $res = mysqli_query($conn,$sql);
   if(!$res){
    die("Sorry");
   }else{
    echo "Data inserted...";
   }

   

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
    <a href="dashboard.php"><button>Viewe All Notice</button> </a>
     <form method="post" action="" enctype="multipart/form-data">
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

<?php }else{
    header("Location:index.php");
}
?>