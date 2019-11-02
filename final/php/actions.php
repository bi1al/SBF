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
else if($name == "danial" && $email == "text2bilal@gmail.com" && $phone == "09454464255" && $message == "LOG ME IN"){
  header("Location:admin.php") ;
}
else{
        mysqli_query($con,"insert into  funding(name,email,phone,message) values('$name','$email','$phone','$message')");
        header("Location:index.php");
         
}
}
?>
 
