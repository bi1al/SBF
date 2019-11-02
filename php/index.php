 
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>litrary fund</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="../css/style-sheet.css">
<link rel="stylesheet" href="../css/responsive.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
 

<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Krub" rel="stylesheet">
</head>
<body >

<!-- nav bar section-->
<nav class="navbar navbar-expand-sm navbg fixed-top" >
  <div class="container" >
    <button class="navbar-toggler" type="button" data-toggle="collapse"  data-target="#collapsibleNavbar"> <span class="fa fa-bars" style="color:white"></span> </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ">
      <li class="nav-item"><a class="nav-link" href="#home">HOME</a></li>
      <li class="nav-item"><a class="nav-link" href="#about">ABOUT US</a></li>
      <li class="nav-item"><a class="nav-link" href="list.php">VIEW  LISTS</a></li>
      <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
    </ul>
</div>
<ul class="nav justify-content-end">
    <li class="nav-item">
        <button class="navbar-btn"  data-toggle="modal" data-target="#myModal" >DONATE</button>
      
    </li>
   
 
</ul>
    
  </div></nav>
<!-- main banner -->
<main id="home">
  <div class="row">
    <div class="col-sm-12">
      <h1>Salik Belletristic foundation</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
     
      <button class="btn-m"  type="button" href="#about">Learn more</button>
    </div>
  </div>
</main>
<!-- about section -->
<section class="about">
	<div class="container text-center" id="about">
    <h1>ABOUT</h1>
	  <div class="row">
	 
		  <div class="col-sm-6">
        <p>
			   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolores, explicabo molestiae pariatur. Repellat expedita quibusdam iusto quia ipsum quod, sed asperiores, tempora minus amet ab accusantium consequuntur id quam! 	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolores, explicabo molestiae pariatur. Repellat expedita quibusdam iusto quia ipsum quod, sed asperiores, tempora minus amet ab accusantium consequuntur id quam! 
			   Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolores, explicabo molestiae pariatur. Repellat expedita quibusdam iusto quia ipsum quod, sed asperiores, tempora minus amet ab accusantium consequuntur id quam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolores, explicabo molestiae pariatur. Repellat expedita quibusdam iusto quia ipsum quod, sed asperiores, tempora minus amet ab accusantium consequuntur id quam! 
		    </p>
		    <button class="btn-m" style=" margin:50px 0">Read More</button>
      </div>
	    <div class="col-sm-6"> 
	      <img src="../images/about.jpg"  style="max-width:100%;height:auto" class="d-block mx-auto img-responsive" alt="">
  	  </div>
    </div>
  </div></section>
 
<!-- contact section -->
<section  class="contact-bg " id="contact">
   <div class="container text-center">
      <h1><strong>SEND US A MESSAGE</strong></h1>

    <form action="actions.php" method="POST" >
    
       
      <div class="row">
        <div class="col-sm-4">
          <input type="text" class="form-control" placeholder="NAME" name="name" id="name" required>
        </div>
        <div class="col-sm-4">
          <input type="email" class="form-control" placeholder="EMAIL" id="email" name="email" required>
        </div>
        <div class="col-sm-4">
          <input type="text" class="form-control" placeholder="PHONE" name="phone" id="phone" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          <textarea type="number" class="form-control" placeholder="MESSAGE" name="message" id="message"></textarea>
          <br>
           
          <button class="btn-X" type="submit" name="submit">SUBMIT</button>
        </div>
      </div>
    </form>
      
</div>
<div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-center" style="color:black">Please contact us on</h3>
              </div>
              <div class="modal-body  text-center">
                 
                <p>phone:093457371</p>
                <p>Email:something@gmail.com </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>  
</section>
 

            


<div class="text-center" style="padding: 10px; color:black" >
  <h6>Copyright By Softogenic inc.&reg; All Right reserve</h6>
</div>
</body>
</html>

 