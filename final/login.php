<?php
include_once('connection.php');
if(isset($_POST['submit'])){
 $uname = $_POST['uname'];;
 $pass  = $_POST['psw'];

if(empty($uname)){
echo $msg = "incorrect username";
}
else if(empty( $pass )){
echo $msg = "incorrect password";
}
else if($uname == "danialamin" && $pass == "8224339")
{
    header("Location:list.php") ;
}
 
else{
  echo $msg = "incorrect username or password";
}
}
?>


<?php
include_once('connection2.php');
if(isset($_POST['submit'])){
 $name = $_POST['name'];
 $email = $_POST['email'];
$phone= $_POST['phone'];
 $message = $_POST['message'];
if(empty($name)){
$msg = "name required";
}
else if(empty($email)){
$msg = "email required";
}
else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
echo $msg = "invalid email";
}
else if (empty($phone)){
    echo $msg="field is empty";
}
else if (empty($message)){
echo $msg = "field is empty";
}
else if($uname == "danialamin" && $pass == "8224339")
{
    header("Location:list.php") ;
}
else{
  echo $msg = "incorrect username or password";
}

?>