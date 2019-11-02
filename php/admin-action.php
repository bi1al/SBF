<?php 
include_once('connection2.php');
if(isset($_POST['submit'])){
$date = $_POST['date'];
$name = $_POST['name'];
$region = $_POST['region'];
$amount = $_POST['amount'];
$query = mysqli_query( $con ,"insert into  fund_list(name, date,region,amount) VALUES ('$name','$date','$region','$amount')");
$query_run = mysqli_query($query);

if($query_run){
    sleep(5);
    echo "Process done";
    
  }
  else{
    echo "Process not done";
   
  }
header("Location:admin.php");
}
?>