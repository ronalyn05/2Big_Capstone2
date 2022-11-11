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
	//redirect to login
	header("Location: login.php"); 
	die;
}

function random_num($length)
{
	$text = "";
	if ($length < 5)
	{
		$length = 5;
	}
	//new actual length
	$len = rand(4, $length);

	for ($i=0; $i < $len; $i++) 
	{ 
		$text .= rand(0,9);
	}
	return $text;

}

/*function dbRowSelect($table_name, $form_data)
{
	global $mysqli;
    $fields = array_keys($form_data);
    $query = "select * from ".$table_name." (`".implode('`,`', $fields)."`) VALUES('".implode("','", $form_data)."')";
    return $mysqli->query($query);
}*/
/*if(isset($_POST['submit']))
{
	// As output of $_POST['user_type'] is an array we have to use foreach Loop to display individual value
	if ($_POST['user_type'] == "superadmin")
	{
		header('location: superadmin_dash.php');
    }
    else
    {
        header('location: index_admin.php');
	}
}*/

?>