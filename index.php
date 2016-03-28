
<html>
<head>
<title>Home</title>
</head>

<body>

<center>
Enter Any Name To Print  <br><br><br>
<form action = "index.php" method= "post" >
Enter Name:<input type = "text" name = "name" placeholder = "Enter any name" required style = "border:3px solid black"></input><br> <br>
Enter Number:<input type = "text" name = "count" placeholder = "How many times do you want to print?" required style = "border:3px solid black"></input><br><br>
<input type = "submit" value="Submit" name = "Submit" ></input><br>


</form>
</center>
</body>

</html>

<?php

if (isset($_POST['Submit']))
{
	$name = $_POST['name'];
	$count = $_POST['count'];
	$num = 1;
	while ($count>0)
	{
		echo "<center>".$num ." . ".$name."<br> </center>";
		$num++;
		$count--;
	}
}



?>