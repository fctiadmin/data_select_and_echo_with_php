<?php 
if(isset($_POST['save'])){
	$sname=$_POST['sname'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$class=$_POST['class'];
	echo $sname.'<br>';
	echo $fname .'<br>';
	echo $mname .'<br>';
	echo $class .'<br>';
}
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="" method="post">
			
			
			<input type="text" placeholder="Name" name="sname"/><br />
			<input type="text" placeholder="Father Name" name="fname" /><br />
			<input type="text" placeholder="Mother Name" name="mname" /><br />
			<input type="text" placeholder="Class" name="class" /><br />
			<input type="submit" value="Submit" name="save" /><br />
	
	
	</form>
</body>
</html>