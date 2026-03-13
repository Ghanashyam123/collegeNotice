<?php 
   $conn = mysqli_connect("localhost","root","root","notice"); 
    $sql = "SELECT * FROM noticeRecord";
    $res = mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Notice Board</title>
    <style>
        .notice-title{
            margin-left:500px;
            margin-top: 20px;
            width: 300px;
            height: 300px;
            border: groove red 2px;
            padding: 10px;
        }
   .notice-title h2{
     text-align: center;
     color:red;
   }
   .notice-title p{
    text-align: justify;
   }

</style>
</head>
<body>
    <center>
        <h1>All notices </h1>
    </center> 
<?php 
  while($row=mysqli_fetch_assoc($res)){
    ?>
    <div class="notice-title">
        <h2><?php echo $row['title'];?></h2>
        <p>
            <?php echo $row['description'];?>
        </p>
        <img src="admin/images/<?php echo $row['image'];?>" width="100" height="100" />
    </div> 
 <?php } ?>
</body>
</html>