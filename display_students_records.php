<?php 
require_once 'includes/db-config.php';

$sql = "SELECT * FROM students";
$query = mysqli_query($link, $sql);

if ($query) {
	$sn = 1;
	if (mysqli_num_rows($query) > 0) {
		echo "<table border='1'>";
		echo "<tr>";
		echo "<th>S/N</th><th>Fullname</th><th>Email Address</th><th>Delete Input</th>";
		echo "</tr>";
		while ($row = mysqli_fetch_assoc($query)) {
			$fullname = $row['fullname'];
			$email = $row['email'];
			$delete = '<a href="delete.php?student_id=1">Delete Record</a><a href="delete.php?student_id=2">Delete Record</a>';
			for ($i=1; $i < $delete; $i++) { 
				$delete++;
			}
			echo "<tr>";
			echo "<td>$sn</td><td>$fullname</td><td>$email</td><td>$delete</td>";
			echo "</tr>";
			$sn++;
	echo  "Record deleted successfully";
		}
		echo "</table>";
	}
}
 ?>