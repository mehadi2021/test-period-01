<?php
include 'auth/connection.php';
 $conn= connect();

if(isset($_POST['update'])){
      $id= $_POST['id'];
       $name= $_POST['name'];
        $uName= $_POST['uname'];
        $email= $_POST['email'];
        $pass= $_POST['pass'];
        $rPass= $_POST['r_pass'];
		$result = mysqli_query($conn, "UPDATE registration SET name='$name',uName='$uName',email='$email',pass='$pass' WHERE id='$id'");

            echo "Record updated successfully.";
	   
        }
?>
<?php
if (isset($_GET['id'])) {
$id= $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM registration WHERE id='$id'");

while($res = mysqli_fetch_array($result))
{
$name = $res['name'];
$name = $res['uName'];
$email = $res['email'];
$pass = $res['pass'];


}
}
?>

<html>

<head>
 <title>Registration Form </title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link type="text/css" rel="stylesheet" href="css/indescss.css">
 <link type="text/css" rel="stylesheet" href="css/register.css">
</head>

<body>
 <form method="post" action="edit.php">
  <div class="container reg">

   <!-- <span><?php if($m!='') echo $m; ?></span> -->
   <h3> Edit form</h3>
   <hr>

   <input type="hidden" name="id" value="<?php echo $id; ?>">
   <div>
    <label>Your Name<span>*</span></label>
    <input name="name" id="name" type="text" value="<?php echo $name;?>">
   </div>
   <div>
    <label>Your Username<span>*</span></label>
    <input name="uname" id="uname" type="text" value="<?php echo $name;?>">
   </div>
   <div>
    <label>Your Email</label>
    <input name=" email" id="email" type="text" value="<?php echo $email;?>">
   </div>
   <div>
    <label>Password<span>*</span></label>
    <input name="pass" id="pass" type="password" value="<?php echo $pass;?>">
   </div>
   <div>
    <label>Repeat Password<span>*</span></label>
    <input name=" r_pass" id="rpass" type="password" value="<?php echo $pass;?>">
   </div>
   <div style="text-align: center">
    <p><span>***</span>By creating an account you agree to our Terms & Conditions.</p>
   </div>
   <div style="text-align: center; padding: 20px;">
    <input type="submit" class="btn btn-success" value="Submit" name="update">
   </div>

   <div style="text-align: center">
    <p>Already have an account? <a href="login.php">Sign in</a></p>
   </div>
  </div>
 </form>
</body>
<script type="text/javascript" src="js/script.js"></script>

</html>


<script>
$(document).ready(function() {
 $('.reg').css('color', '#ffce00');
 //document.getElementsByClassName('reg')[0].style.color='#ffce00';
});
/*window.onload= function(){
      document.getElementsByClassName('reg')[0].style.color='#ffce00';
};
*?
 */
</script>