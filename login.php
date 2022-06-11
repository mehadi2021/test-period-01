<?php
 include 'auth/connection.php';
 $conn= connect();
$m='';
 if(isset($_POST['submit'])){
     $uName=$_POST['uname'] ;
     $Pass=$_POST['pass'] ; 
// }  
   $sql= "SELECT * FROM registration WHERE uName='$uName' ";  
     $res=$conn->query($sql);
    $row = $res->fetch_assoc();

if ($res->num_rows == 1 && $uName==$row['uName'] && password_verify($Pass, $row['pass']) ) {
  

        header('Location:index.php');
     }          
     else{
         $m='coneection mismatch';
     }  
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Latest compiled and minified CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 <!-- coustomise link css. -->
 <link rel="stylesheet" href="css/indescss.css">
 <link rel="stylesheet" href="css/login.css">
 <title>Document</title>
</head>

<body>
 <div class="logo">

 </div>
 <form method="POST" action="login.php">
  <div class="box bg-img">
   <div class="content">
    <h2>log <span>In</span></h2>
    <div class="forms">
     <p style="color: red; padding:20px;">
      <?php
            
            if($m!='') echo $m;
            ?>
     </p>
     <div class="user-input">
      <input type="text" name="uname" class="login-input" placeholder="Userneme" id="name" requied>
      <i class="fas fa-user"></i>
     </div>
     <div class="pass-input">
      <input type="password" name="pass" class="login-input" placeholder="Password" id="pass" requied>
      <i class="fas fa-eye"></i>

     </div>


    </div>
    <button class="login-btn" name="submit" type="submit">Sign In</button>
    <p class="new-account">but a user? <a href="registation.php">Sign Up now!</a></p>
    <br>
    <p class="f-pass">
     <a href="#"> forgot passsword</a>
    </p>


   </div>


  </div>

 </form>

 </boby>

</html>