<?php
require_once('admin_dbcon.php');
if(isset($_POST['submit'])){
	
	$sname=$_POST['sname'];
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$course_title=$_POST['course_title'];
	
$query=mysqli_query($dbcon,"INSERT INTO `student_data`(`student_name`, `father_name`, `mother_name`, `course`) VALUES ('$sname','$fname','$mname','$course_title')");

if($query){
	echo '<script>
		alert("Successfully data inserted");
		window.location.href="index.php";
	</script>';
	$sname=false;
	$fname=false;
	$mname=false;
	$course_title=false;
}
	// if($insert_query){
	// 	echo '
	// 	<script>
	// 	alert("Successfully data inserted");
	// 	window.location.href="index.php";
		
	// 	</script>
	// 	';
	// };
}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Data insert with php sql</title>
</head>
<body>
	<form  method="post">
	
		<input type="text" name="sname" placeholder="Student Name" required /><br />
		<input type="text" name="fname" placeholder="Father Name" /><br />
		<input type="text" name="mname" placeholder="Mother Name" /><br />
		<input type="text" name="course_title" placeholder="Course Title" /><br />
		<input type="submit" name="submit" value="Submit"/>
	
	</form>
</body>
</html>