<?php
include_once('connection2.php'); 
# Batkhela query ...
$a = mysqli_query($con, "SELECT sum(amount) FROM fund_list where region = 'batkhela'");
$row = mysqli_fetch_assoc($a);
foreach($row as $btk);
   

# thana query
$b = mysqli_query($con, "SELECT sum(amount) FROM fund_list where region = 'thana'");
$row2 = mysqli_fetch_assoc($b);
foreach($row2 as $thana);
   

# swat query
$c = mysqli_query($con, "SELECT sum(amount) FROM fund_list where region = 'swat'");
$row3 = mysqli_fetch_assoc($c);
foreach($row3 as $swat);


# chakdara query
$d = mysqli_query($con, "SELECT sum(amount) FROM fund_list where region = 'chakdara'");
$row4 = mysqli_fetch_assoc($d);
foreach($row4 as $ckd);

# temargara query
$e = mysqli_query($con, "SELECT sum(amount) FROM fund_list where region = 'temargara'");
$row5 = mysqli_fetch_assoc($e);
foreach($row5 as $tmg);

# mardan query
$f = mysqli_query($con, "SELECT sum(amount) FROM fund_list where region = 'mardan'");
$row6 = mysqli_fetch_assoc($f);
foreach($row6 as $mardan);

# peshawar query
$g = mysqli_query($con, "SELECT sum(amount) FROM fund_list where region = 'peshawar'");
$row7 = mysqli_fetch_assoc($g);
foreach($row7 as $peshawar);


$total = $peshawar + $btk +$thana + $ckd + $tmg +$mardan ;
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
.accordion {
  background-color: #eee;
  color: #444;
  
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  border:1px solid #2ECC71;
  border-bottom:none;
}
.active, .accordion:hover {
  background-color: #ccc;
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.jumbotron{
  margin:0;
  border-radius:0px;
  padding:40px;
}
 
</style>
</head>
<body>

<div class="jumbotron text-center">
<h2 >Regions Lists </h2>
<p>Click for details</p>
</div>

<!-- Batkhela region-->
<button class="accordion">
<div class="container">
<b>
Batkhela <p class="text-right" style="float:right;">
    <?php echo $btk ;?>
</p>
</b>
</div>
     
          </button>
<div class="panel container-fluid">
    <div class="container-fluid">
   
        <div class="table-responsive-sm ">
          <table class="table table-bordered table-responsive-sm  ">
            <thead>
                <tr>
                    <th>Date</th><th>Name</th>   <th>Amount</th> 
                </tr>
                <?php 
                
                $query = mysqli_query($con,"SELECT * FROM fund_list WHERE region = 'batkhela'");
                while($r = mysqli_fetch_array($query)){
                ?>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $r['date']; ?></td> <td><?php echo $r['name']; ?></td>   <td><?php echo $r['amount']; ?></td>   
              </tr>
              <?php
        } 
         ?> 
         <tr>
         <td colspan="2">
         <p>Total Amount</p>
         </td>
         <td> 
         <?php
    echo $btk ;
  ?>
         </td>
         </tr>
            </tbody>
        </table>
        </div>
      </div>
    </table>
</div>

<!-- Thana -->
<button class="accordion">
<div class="container"> <b>
Thana <p class="text-right" style="float:right;">
   <?php echo $thana ;?>
</p></b>
</div>
     
          </button>
<div class="panel container-fluid">
    <div class="container-fluid">
   
        <div class="table-responsive-sm ">
          <table class="table table-bordered table-responsive-sm  ">
            <thead>
                <tr>
                    <th>Date</th><th>Name</th>   <th>Amount</th> 
                </tr>
                <?php 
                
                $query = mysqli_query($con,"SELECT * FROM fund_list WHERE region = 'thana'");
                while($r = mysqli_fetch_array($query)){
                ?>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $r['date']; ?></td> <td><?php echo $r['name']; ?></td>   <td><?php echo $r['amount']; ?></td>   
              </tr>
              <?php
        } 
         ?> 
         <tr>
         <td colspan="2">
         <p>Total Amount</p>
         </td>
         <td> 
         <?php
    echo $thana ;
  ?>
         </td>
         </tr>
            </tbody>
        </table>
        </div>
      </div>
    </table>
</div>


<!-- swat region-->
<button class="accordion">
<div class="container">
<b>
Swat <p class="text-right" style="float:right;">
 <?php echo $swat ;?>
</p>
</b>
</div>
     
          </button>
<div class="panel container-fluid">
    <div class="container-fluid">
   
        <div class="table-responsive-sm ">
          <table class="table table-bordered table-responsive-sm  ">
            <thead>
                <tr>
                    <th>Date</th><th>Name</th>  <th>Amount</th> 
                </tr>
                <?php 
                
                $query = mysqli_query($con,"SELECT * FROM fund_list WHERE region = 'swat'");
                while($r = mysqli_fetch_array($query)){
                ?>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $r['date']; ?></td> <td><?php echo $r['name']; ?></td>   <td><?php echo $r['amount']; ?></td>   
              </tr>
              <?php
        } 
         ?> 
         <tr>
         <td colspan="2">
         <p>Total Amount</p>
         </td>
         <td> 
         <?php
    echo $swat ;
  ?>
         </td>
         </tr>
            </tbody>
        </table>
        </div>
      </div>
    </table>
</div>



<!-- chakdara region-->
<button class="accordion">
<div class="container">
<b>
Chakdara <p class="text-right" style="float:right;">
   <?php echo $ckd ;?>
</p>
</b>
</div>
     
          </button>
<div class="panel container-fluid">
    <div class="container-fluid">
   
        <div class="table-responsive-sm ">
          <table class="table table-bordered table-responsive-sm  ">
            <thead>
                <tr>
                    <th>Date</th><th>Name</th>  <th>Amount</th> 
                </tr>
                <?php 
                
                $query = mysqli_query($con,"SELECT * FROM fund_list WHERE region = 'chakdara'");
                while($r = mysqli_fetch_array($query)){
                ?>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $r['date']; ?></td> <td><?php echo $r['name']; ?></td>  <td><?php echo $r['amount']; ?></td>   
              </tr>
              <?php
        } 
         ?> 
         <tr>
         <td colspan="2">
         <p>Total Amount</p>
         </td>
         <td> 
         <?php
    echo $ckd ;
  ?>
         </td>
         </tr>
            </tbody>
        </table>
        </div>
      </div>
    </table>
</div>


<!-- Temargara region-->
<button class="accordion">
<div class="container">
<b>
Temargara <p class="text-right" style="float:right;">
  <?php echo $tmg ;?>
</p>
</b>
     
          </button>
<div class="panel container-fluid">
    <div class="container-fluid">
   
        <div class="table-responsive-sm ">
          <table class="table table-bordered table-responsive-sm  ">
            <thead>
                <tr>
                    <th>Date</th><th>Name</th><th>Amount</th> 
                </tr>
                <?php 
                
                $query = mysqli_query($con,"SELECT * FROM fund_list WHERE region = 'temargara'");
                while($r = mysqli_fetch_array($query)){
                ?>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $r['date']; ?></td> <td><?php echo $r['name']; ?></td><td><?php echo $r['amount']; ?></td>   
              </tr>
              <?php
        } 
         ?> 
         <tr>
         <td colspan="2">
         <p>Total Amount</p>
         </td>
         <td> 
         <?php
    echo $tmg ;
  ?>
         </td>
         </tr>
            </tbody>
        </table>
        </div>
      </div>
    </table>
</div>

<!-- Mardan region-->
<button class="accordion">
<div class="container">
<b>
Mardan <p class="text-right" style="float:right;">
   <?php echo $mardan ;?>
</p>
</b>
     
          </button>
<div class="panel container-fluid">
    <div class="container-fluid">
   
        <div class="table-responsive-sm ">
          <table class="table table-bordered table-responsive-sm  ">
            <thead>
                <tr>
                    <th>Date</th><th>Name</th>   <th>Amount</th> 
                </tr>
                <?php 
                
                $query = mysqli_query($con,"SELECT * FROM fund_list WHERE region = 'mardan'");
                while($r = mysqli_fetch_array($query)){
                ?>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $r['date']; ?></td> <td><?php echo $r['name']; ?></td>   <td><?php echo $r['amount']; ?></td>   
              </tr>
              <?php
        } 
         ?> 
         <tr>
         <td colspan="2">
         <p>Total Amount</p>
         </td>
         <td> 
         <?php
    echo $mardan ;
  ?>
         </td>
         </tr>
            </tbody>
        </table>
        </div>
      </div>
    </table>
</div>


<!-- peshawar region-->
<button class="accordion">
<div class="container">
<b>
Peshawar <p class="text-right" style="float:right;">
   <?php echo $peshawar ;?>
</p>
</b>
     
          </button>
<div class="panel container-fluid">
    <div class="container-fluid">
   
        <div class="table-responsive-sm ">
          <table class="table table-bordered table-responsive-sm  ">
            <thead>
                <tr>
                    <th>Date</th><th>Name</th>  <th>Amount</th> 
                </tr>
                <?php 
                
                $query = mysqli_query($con,"SELECT * FROM fund_list WHERE region = 'peshawar'");
                while($r = mysqli_fetch_array($query)){
                ?>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $r['date']; ?></td> <td><?php echo $r['name']; ?></td>   <td><?php echo $r['amount']; ?></td>   
              </tr>
              <?php
        } 
         ?> 
         <tr>
         <td colspan="2">
         <p>Total Amount</p>
         </td>
         <td> 
         <?php
    echo $peshawar ;
  ?>
         </td>
         </tr>
            </tbody>
        </table>
        </div>
      </div>
    </table>
</div>


<!-- peshawar region-->
<button class="accordion">
<div class="container">
<b>
Total of totals<p class="text-right" style="float:right;">
   <?php echo $total ?>
</p>
</b>
     
          </button>
 
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

</body>
</html>
