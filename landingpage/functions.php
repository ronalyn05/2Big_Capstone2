<?php  

function check_login($con)
{
	//checking if session value exist
	if (isset($_SESSION['user_id']))
	{
		// 
		$id = $_SESSION['user_id'];
		$query = "select * from user where user_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		
		if ($result && mysqli_num_rows($result) > 0) 
		{
			// fetch the user data
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	//redirect to Superadmin Dashboard
	header("Location: superadmin_dash.php"); 
	die;
}

function random_num($length)
{
	$text = "";
	if ($length < 5)
	{
		$length = 5;
		// code...
	}
	//new actual length
	$len = rand(4, $length);

	for ($i=0; $i < $len; $i++) 
	{ 
		$text .= rand(0,9);
		// code...
	}
	return $text;

}
/*Each $_POST variable with be checked by the function*/
function test_input($data) {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}

?>
