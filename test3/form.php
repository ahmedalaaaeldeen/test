<?php

	include "test.php";

	$school = $conn->prepare("SELECT * FROM students");

	$school->execute();
	?>
	<table>

	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Phone</th>
	</tr>

	</table>
<?php
	while ($row = $school->fetch()) {
		?>

		<tr>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['phone'] ?></td>
		</tr>
		<?php
	}

	?>

	