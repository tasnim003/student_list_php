<?php 
require_once('admin_dbcon.php');
$target_id=base64_decode($_GET['target_id']);
$delete_query=mysqli_query($dbcon,"DELETE FROM `student_data` WHERE `id`='$target_id'");
if($delete_query){
	header('Location:student_list.php');
}
?>