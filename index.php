<!DOCTYPE html>
<html>
<head>
	<title>PHP Calculator</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <style>
.btn {
  background-color: black;
  border: 3px solid black;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}

.btn:hover {
  background-color: white;
  color: black;
}
</style>
</head>
<body>

<div class="Jumbotron">
<h3 class="display-3" style="text-align: center;font-weight:500;   -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: black; color:white;" >PHP and MySQL Calculator</h3>
</div>

<div class="container">
<ul class="nav justify-content-center nav-tabs">
<li class="nav-item">
    <a class="nav-link" aria-current="page" href="index.php"><i  style="color:black;font-size: xx-large;
   font-weight:700" class="fas fa-home"></i></a>
  </li>

  <li class="nav-item">
    <a class="nav-link " aria-current="page" style="color:black;" href="normal.php">Normal Calculator</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" style="color:black; "href="scientific.php">Scientific Calculator</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" style="color:black;" href="history.php">History</a>
  </li>


</ul>
</div>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: inline;text-align:center;">
      <br><br>
  <button onclick="location.href = 'normal.php';" style="width: 35%;" class="btn btn-lg">Normal Calculator</button>
  <button onclick="location.href = 'scientific.php';" style="width: 35%;" class="btn btn-lg">Scientific Calculator</button>
    </div>
    
  </div>


</div>



<div style="text-align: center; font-weight:bold;">
<br><br><br>
<?php
$conn = mysqli_connect("localhost","root","root","calculator");
$message = "Succesfully Connected to MySQL Server";
if (mysqli_connect_errno())
{
    echo "Unable to find MySQL Server: " . mysqli_connect_error();
}
else{
    echo $message;
}
?>
</div>

</body>
</html>