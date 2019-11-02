
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">
    
    .jumbotron{
        width:50%;
        margin:10% 0 0 25%;
    }
    input[type=text],input[type=date],input[type=number],.select{
        width:100%;
        padding:
        color:black;
        border:1px solid #ccc;
    }
    input[type=submit]{
        padding:10px 15px;
    }
    @media screen and (max-width: 600px) {
        .jumbotron{ width:100%;margin:20px 0 0 0;}
    }
    </style>
</head>
<body>
<div class="container">
<div class="jumbotron">
<form action="admin-action.php" method="post">
<label for="date">Date:</label><br>
<input type="date" class="form-control" name="date" required>
 <br>
<label for="name"  >Name:</label><br>
<input type="text" class="form-control" name="name" required><br>
<label for="select place">Region:</label><br>
<select  class="form-control select" name="region" id="" required>
<option value="Batkhela">Batkhela</option>
<option value="thana">Thana</option>
<option value="swat">Swat</option>
<option value="chakdara">Chakdara</option>
<option value="temargara">Temargara</option>
<option value="mardan">Mardan</option>
<option value="peshawar">Peshawar</option>
 
</select><br>
<label for="amount">Amount:</label><br>
<input type="number" class="form-control" name="amount" required><br> 
<input type="submit" value="submit" name="submit">
</form>
</div>
</div>
</body>
</html>
