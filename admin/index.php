<?php 
session_start();
if(isset($_SESSION['username'])){
    header("Location:dashboard.php");
}else{
  $username ="";
  $password = "";
  $msg1 = "";
  $msg2 = "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST['txtusername'])){
        $msg1="<p style=color:red>Enter username:<p>";
    }else{
$username = filterData($_POST['txtusername']);
    }
    if($_POST['txtpass']==""){
        $msg2 = "<p style=color:red>Enter password</p>";
    }else{
        $password = filterData($_POST['txtpass']);
    }

  // database connection 
  $conn = mysqli_connect("localhost","root","root","notice");
    
  $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

  $result = mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
            // session start
            session_start();
            $_SESSION['username'] = $username;
            header("Location:dashboard.php");
  }else{
    echo "not found";
  }

}
function filterData($data){
            // checking data filtering 
      $data = trim($data);
      $data = stripslashes($data);
    $data = htmlspecialchars($data);
   return $data;
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        .row{
            margin-left: 10px;
            margin-right: 10px;
        }
        .login{
            width: 300px;
        }
    </style>
</head>
<body>
     <div class="row">
        <div class="login">
            <h2>Login</h2>
            <form method="POST" action="">
            <fieldset>
                <legend>Login </legend>
                <label>User name</label>
                <?php echo $msg1; ?>
                <input type="text" name="txtusername" /> <br> <br>
                <label>Password</label>
                <?php echo $msg2; ?>
                <input type="password" name="txtpass" /> <br> <br>

                <input type="submit" name="submit" value="Login" />
                <input type="reset" name=cancel value="cancel" />

            </fieldset>
            </form>
        </div>
     </div> 
</body>
<script>    


    </script>
</html>

<?php } ?>