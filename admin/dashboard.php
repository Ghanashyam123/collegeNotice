<?php
session_start();
if(isset($_SESSION['username'])){
  $conn = mysqli_connect("localhost","root","root","notice");
  $sql = "SELECT * FROM noticeRecord";
  $res = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel Notice management </title>
</head>
<body>
        <h2>
            Notice Detaile of College
        </h2>
    <a href="createNotice.php"><button>Add New</button> </a><br> <br>
    <table border="2">
        <tr>
            <th>SN</th>
            <th>Title</th>
            <th>Description</th>
            <th>Publish Date</th>
            <th>Imge</th>
            <th>Action</th>
        </tr>
        <?php 

         while($row=mysqli_fetch_assoc($res)){
            ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['created_at'] ?></td>
            <td><img src="images/<?php echo $row['image'] ?>" height="100" width="100"/></td>
            <td>
               <a href="editNotice.php"> <button>Edit</button> </a>
               <a href="deleteNotice.php">  <button>Delete</button> </a>
                <button>Status </button>
            </td>
        </tr>
         <?php } ?>
    </table>


</body>
</html>

<?php }else{
    header("Location:index.php"); 
} ?>