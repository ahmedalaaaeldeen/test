
	<form action="post">
		<input type="email" name="email" placeholder="Email"><br><br>
		<input type="password" name="pass" placeholder="Password"><br><br>
		<button name="submit">submit</button>
	</form>

<?php

	if (isset($_POST['submit'])) {
		
		$user = [$_POST['email'] , $_POST['pass'] ];
		$data = [
			['ahmedalaa2021@gmail.com','123456'] ,
			['mohame@gmail.com','1234567'] ,
			['mah@gmail.com','123456789']
		];

		if (in_array($user,$data)) {
			echo "yes";
		}

	}
	?>


