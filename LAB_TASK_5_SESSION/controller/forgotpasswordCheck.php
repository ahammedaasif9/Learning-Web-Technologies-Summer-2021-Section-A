  <?php
session_start();

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		

		if ($email == "") {

			echo "Null Submission";
		}
		else{
			$user = $_SESSION['user'];
			if ($email == $user['email'] ) {
				 echo "Your Current Password is : ";
				print_r($user['password']);
			}
			else{
				echo "Invaid User";
			}
		}
	}

?>