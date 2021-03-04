<!DOCTYPE html>
<html>
<head>
	<title>Scientific Calculator</title>
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<div class="Jumbotron">
<h3 class="display-3" style="text-align: center;font-weight:500;   -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: black; color:white;" >PHP and MySQL Scientific Calculator</h3>
</div>

<div class="container">
<ul class="nav justify-content-center nav-tabs">
<li class="nav-item">
    <a class="nav-link" aria-current="page" style="color:black;" href="index.php"><i class="fas fa-home"></i></a>
  </li>
  <li class="nav-item">
    <a class="nav-link " style=" font-weight:500;color:black;" aria-current="page" href="normal.php">Normal Calculator</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page"  style="color:black;font-size: x-large;
   font-weight:500;" href="scientific.php">Scientific Calculator</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page"  style="color:black; font-weight:500;" href="history.php">History</a>
  </li>

</ul>
</div>
<br><br>
<form action="scientific.php" method="POST" style="text-align:center;">
     1st  Value: &nbsp;<input type="number" name="num1"><br><br>
     2nd Value: <input type="number" name="num2"><br><br>

<div class="container">
<div class="row">
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align: left;">
</div>
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align: left;">
  <input type="radio" id="add" name="oprt" value="add">
  <label for="Add">Add</label><br>

  <input type="radio" id="subtract" name="oprt" value="sub">
  <label for="Subtract">Subtract</label><br>

  <input type="radio" id="multiply" name="oprt" value="mul">
  <label for="Multiply">Multiply</label><br>

  <input type="radio" id="divide" name="oprt" value="div">
  <label for="divide">Divide</label><br>
  
</div>
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align: left;">
 <input type="radio" id="cos" name="oprt" value="cos">
  <label for="cos">Cosin</label><br>
    
  <input type="radio" id="sin" name="oprt" value="sin">
  <label for="sin">Sin</label><br>
    
  <input type="radio" id="tan" name="oprt" value="tan">
  <label for="tan">Tangent</label><br>
    
  <input type="radio" id="e" name="oprt" value="e">
  <label for="e">Exponent</label><br>
</div>
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align: left;">
    <input type="radio" id="log" name="oprt" value="log">
  <label for="log">Logarithm</label><br>
    
  <input type="radio" id="pi" name="oprt" value="pi">
  <label for="pi">PI</label><br>
    
  <input type="radio" id="pow" name="oprt" value="pow">
  <label for="pow">Power</label><br>
    
  <input type="radio" id="sqt" name="oprt" value="sqt">
  <label for="sqt">Square Root</label><br>
</div>
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align: left;">
 <input type="radio" id="cosh" name="oprt" value="cosh">
  <label for="cosh">Cosh</label><br>
    
  <input type="radio" id="sinh" name="oprt" value="sinh">
  <label for="sinh">Sinh</label><br>
    
  <input type="radio" id="tanh" name="oprt" value="tanh">
  <label for="tanh">Tanh</label><br>
    
  <input type="radio" id="rnd" name="oprt" value="rnd">
  <label for="rnd">Randomize</label><br>
</div>
<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="text-align: left;">
</div>
</div>

</div>



    <br><input type="submit" ><br><br>

     
</form>

<?php
     $num1 = $_POST["num1"];
     $num2 = $_POST["num2"];
     $oprt = $_POST["oprt"];

     $a = 0;
     
     if($oprt == "add"){
           $a = $num1 + $num2;
     }
     else if($oprt == "sub"){
           $a =  $num1 - $num2;
     }
     
     else if($oprt == "mul"){
           $a =  $num1 * $num2;
     }
     else if($oprt == "div"){
           $a =  $num1 / $num2;
     }
     else if($oprt == "cos"){
        $a =  cos($num1 + $num2);
  }
  else if($oprt == "sin"){
    $a =  sin($num1 + $num2);
}
else if($oprt == "tan"){
    $a =  tan($num1 + $num2);
}
else if($oprt == "cosh"){
    $a =  cosh($num1 + $num2);
}
else if($oprt == "sinh"){
    $a =  sinh($num1 + $num2);
}
else if($oprt == "tanh"){
    $a =  tanh($num1 + $num2);
}
else if($oprt == "e"){
    $a =  exp($num1 + $num2);
}
else if($oprt == "log"){
    $a =  log($num1 + $num2);
}
else if($oprt == "pi"){
    $a =  pi($num1 + $num2);
}
else if($oprt == "pow"){
    $a =  pow($num1,$num2);
}
else if($oprt == "sqt"){
    $a =  sqrt($num1 + $num2);
}
else if($oprt == "rnd"){
    $a =  rand();
}

         
     
     
?>

<div style="width: 50%; margin-left:25%; margin-right:25%;" class="alert alert-dark" >
<?php
echo $a;
?>
</div>

<div style="text-transform: uppercase; text-align: center;" >
Enter Zero (0) if only Single Digit Operation is Required.
</div>


<div style="text-align: center; font-weight:bold;">
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
$m = "Scientific";
$sql = "INSERT INTO `valuescal` (`number1`,`operation`,  `number2`, `result`, `mode`) VALUES ( '$num1', '$oprt', '$num2', '$a', '$m') ";
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