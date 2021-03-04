<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



</head>
<body>
<div id="all">
<div class="Jumbotron">
<h3 class="display-3" style="text-align: center;font-weight:500;   -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: black; color:white;">PHP and MySQL Normal Calculator</h3>
</div>

<div class="container">
<ul class="nav justify-content-center nav-tabs">    
<li class="nav-item">
    <a class="nav-link" aria-current="page" style="color:black;" href="index.php"><i class="fas fa-home"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link " style="font-size: x-large;
   font-weight:500;color:black;" aria-current="page" href="normal.php">Normal Calculator</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" style="color:black;" href="scientific.php">Scientific Calculator</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" style="color:black;" href="history.php">History</a>
  </li>

</ul>
</div>
<br><br>
<form action="normal.php" method="POST" style="text-align:center;">
     1st Value:&nbsp;&nbsp;<input type="number" name="num1"><br><br>
     2nd Value: <input type="number" name="num2"><br><br>


  <input type="radio" id="add" name="oprt" value="add">
  <label for="Add">Add</label>

  <input type="radio" id="subtract" name="oprt" value="sub">
  <label for="Subtract">Subtract</label>

  <input type="radio" id="multiply" name="oprt" value="mul">
  <label for="Multiply">Multiply</label>

  <input type="radio" id="divide" name="oprt" value="div">
  <label for="divide">Divide</label><br>
    <br><input type="submit" ><br><br>

     
</form>

<?php
     $num1 = $_POST["num1"];
     $num2 = $_POST["num2"];
     $oprt = $_POST["oprt"];

     $a = 0;
     
     if($oprt == 'add'){
           $a = $num1 + $num2;
     }
     else if($oprt == 'sub'){
           $a =  $num1 - $num2;
     }
     
     else if($oprt == 'mul'){
           $a =  $num1 * $num2;
     }
     else if($oprt == 'div'){
           $a =  $num1 / $num2;
     }
     
?>

<div style="width: 50%; margin-left:25%; margin-right:25%;" class="alert alert-dark" >
<?php
echo $a;
?>
</div>
</div>



<div style="text-align: center; font-weight:bold;">
<br><br><br><br>
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

<div class="container" style="text-align: center;">

<?php
$m = "Normal";
$sql = "INSERT INTO `valuescal` (`number1`,`operation`,  `number2`, `result`, `mode`) VALUES ('$num1', '$oprt', '$num2', '$a', '$m') ";


if ($conn->query($sql) === TRUE){
   echo "Answers and Values are Saved.";
} 
else if ($conn->query($sql) === FALSE)
   {
       echo "Enter Values to be Saved";
   }
else {
   echo "Error whilst saving Answers and Values: " . $sql . "<br>" . $conn->error;
   }
?>   
</div>

</body>
</html>