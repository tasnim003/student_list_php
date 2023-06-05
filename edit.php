<?php
require_once('admin_dbcon.php');
$target_id=base64_decode($_GET['target_id']);

$data_select=mysqli_query($dbcon,"SELECT * FROM `student_data` WHERE `id`='$target_id'");
$data_rows=mysqli_fetch_assoc($data_select);
if(isset($_POST['submit'])){
$sname=$_POST['sname'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$course=$_POST['course_title'];


$update_query=mysqli_query($dbcon,"UPDATE `student_data` SET `student_name`='$sname',`father_name`='$fname',`mother_name`='$mname',`course`='$course' WHERE `id`='$target_id';");
if($update_query){
    echo '<script>
        alert("Successfully data updated");
        window.location.href="student_list.php";
    
    </script>';
}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  method="post">
	
    <input type="text" name="sname" placeholder="Student Name" value="<?=$data_rows['student_name']?>" required /><br />
    <input type="text" name="fname" placeholder="Father Name" value="<?=$data_rows['father_name']?>" /><br />
    <input type="text" name="mname" placeholder="Mother Name" value="<?=$data_rows['mother_name']?>" /><br />
    <input type="text" name="course_title" placeholder="Course Title" value="<?=$data_rows['course']?>" /><br />
    <input type="submit" name="submit" value="Update"/>

</form>
</body>
</html>