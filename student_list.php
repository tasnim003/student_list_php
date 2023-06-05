<?php 
require_once('admin_dbcon.php');
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Student Fetch</title>
</head>
<body>
	<table border="1" cellspacing="0">

		<thead>
			<tr>
				<td>Id</td>
				<td>Student Name</td>
				<td>Father Name</td>
				<td>Mother Name</td>
				<td>Course</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php 
			$sl=1;
				$data_query=mysqli_query($dbcon,"SELECT * FROM `student_data`");
				while($rows=mysqli_fetch_assoc($data_query)){?>
					
					<tr>
						<td><?=$sl;?></td>
						<td><?=$rows['student_name']?></td>
						<td><?=$rows['father_name']?></td>
						<td><?=$rows['mother_name']?></td>
						<td><?=$rows['course']?></td>
						<td><a href="delete.php?id=<?=base64_encode($rows['id'])?>">Delete</a>|<a href="edit.php?target_id=<?=base64_encode($rows['id'])?>">Edit</a></td>
						
					</tr>
					
					
				<?php	
			$sl++;
				}
			?>
		</tbody>

	</table>
</body>
</html>