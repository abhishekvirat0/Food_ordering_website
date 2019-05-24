<?php
include '../connection.php';
// session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

	$login_email = $_POST['login_email'];
	$login_pass =  $_POST['login_pass'];


	$result = mysqli_query($conn, "SELECT * FROM user_dtls WHERE e_mail = '$login_email' and pass = '$login_pass'");
	if ($get = mysqli_fetch_array($result))
	{
		session_start();
		$_SESSION["pass"] = $login_pass;
		$_SESSION["email"] = $login_email;

		echo "1";
	}
	else
	{
		echo "3";
	}
}
else
{
	echo "2";
}

?>
