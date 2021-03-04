<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<title>History</title>
<style>
 table, th, td {
    border: 2px solid black;
    width: 500px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
}



</style>
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
    <a class="nav-link " style="color:black;" aria-current="page" href="normal.php">Normal Calculator</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" style="color:black;" href="scientific.php">Scientific Calculator</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" aria-current="page" style=" font-size: x-large;
   font-weight:500;color:black;" href="scientific.php">History</a>
  </li>

</ul>
</div>



<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "calculator";

?>
<?php
$conn = new mysqli($servername, $username, $password, $dbname);
?>
<div class="container" style="text-align: center;margin:auto; " >
  <?php

  $sql = "SELECT * FROM valuescal";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      echo "<table ><tr><th> 1st Value </th><th> Operation </th><th> 2nd Value </th><th> Result </th><th> Mode </th></tr>";
      while($row = $result->fetch_assoc()) {
          echo "<tr>
          <td>" . $row["number1"]. "</td>
          <td>" . $row["operation"]. "</td>
          <td>" . $row["number2"]. "</td>
          <td>" . $row["result"]. "</td>
          <td>" . $row["mode"]. "</td>
          </tr>";
      }
      echo "</table>";
  } else {
      echo "No Results were found.";
  }

  $conn->close();
  ?>

</div>

<div style="text-align: center; font-weight:bold;">
<br><br>
<?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Succesfully Connected to MySQL Server.";
}
?>
</div>

</body>
</html>