<?php
$conn = mysqli_connect("localhost","root","","calculator");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<?php
if(isset($_POST['sub']))
{
	$txt1=$_POST['n1'];
	$txt2=$_POST['n2'];
	$oprnd=$_POST['sub'];
	if($oprnd=="+")
		$res=$txt1+$txt2;
	else if($oprnd=="-")
		$res=$txt1-$txt2;
	else if($oprnd=="x")
		$res=$txt1*$txt2;
	else if($oprnd=="cos")
		$res=cos($txt1);
	else if($oprnd=="sin")
		$res=sin($txt1);
	else if($oprnd=="tan")
		$res=tan($txt1);
	else if($oprnd=="e")
		$res=exp($txt1);
	else if($oprnd=="log")
		$res=log($txt1);
	else if($oprnd=="pi")
		$res=pi($txt1);
	else if($oprnd=="pow")
		$res=pow($txt1);
	else if($oprnd=="sqrt")
		$res=sqrt($txt1);
	else if($oprnd=="max")
		$res=max($txt1,$txt2);
	else if($oprnd=="min")
		$res=min($txt1,$txt2);
	echo "";
	$sql = "INSERT INTO `valuescal` (`id`, `number1`, `number2`, `operator`, `result`) VALUES (NULL, '$txt1', '$txt2', '$oprnd', '$res' ) ";
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } 
	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
		}
}
?>
<html>
<head>
	<style type="text/css">
		.container
		{
			left: 25%;
			padding: 100px;
			text-align: center;
			border: 1px solid green;
			
		}
		input, select {
  			width: 40%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 1px solid #ccc;
  			border-radius: 4px;
  			box-sizing: border-box;
		}

		input[type=submit] {
  			width: 10%;
 		 	background-color: #4CAF50;
  			color: white;
  			padding: 14px 20px;
  			margin: 8px 0;
  			border: none;
	 	 	border-radius: 4px;
  			cursor: pointer;
}
	</style>
</head>
<body>
	<div class="container">
<form method="post" action="">
<h1>Calculator</h1>
<br>
"Input at First Number For cos,sin and other functions."
<br>
First Number:<input name="n1" value="">
<br>
Second Number:<input name="n2" value="">
<br>
<input type="submit" name="sub" value="+">
<input type="submit" name="sub" value="-">
<input type="submit" name="sub" value="x">
<input type="submit" name="sub" value="/">
<br>
<input type="submit" name="sub" value="cos">
<input type="submit" name="sub" value="sin">
<input type="submit" name="sub" value="tan">
<input type="submit" name="sub" value="e">
<br>
<input type="submit" name="sub" value="log">
<input type="submit" name="sub" value="pi">
<input type="submit" name="sub" value="pow">
<input type="submit" name="sub" value="sqrt">
<br>
<input type="submit" name="sub" value="max">
<input type="submit" name="sub" value="min">
<br>Result: <input type='text' value="<?php echo $res; ?>"><br>
</form>
</div>
<div class="button">
<form method="post">
	<input  type="submit" name="ans" value="Retrieve Data">
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['ans']))
{
$sql = "SELECT * FROM valuescal";
$result = $conn->query($sql);
if(mysqli_num_rows($result) > 0){
        echo "<table style='border: 1px dashed black;'>";
            echo "<tr>";
                echo "<th>First Number:</th>";
                echo "<th>Second Number:</th>";
                echo "<th>Operator</th>";
                echo "<th>Result</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['number1'] . "</td>";
                echo "<td>" . $row['number2'] . "</td>";
                echo "<td>" . $row['operator'] . "</td>";
                echo "<td>" . $row['result'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
}
?>