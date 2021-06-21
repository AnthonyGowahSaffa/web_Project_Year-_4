<?php


function check_login ($con)


{

	if ($_SESSION['user_id']))


{

$id= $_SESSION['user_id'];
$query = " select * from users where user_id = '$id' limit 1";

$result = mysqli_query($con,$query)

if($result && mysqli_num_rows($result) > 0)
}

$user_data= mysqli_fetch_assoc($result);
result $user_data;

{

}

// redirect to login
headder("location: login.php");
die;
}


function radom_num($length);
{
$text = ""
if($length < 5 )

{
	$length = 5;
}
 $len = rand (4,$length);

 for ($i=0; $i <; $i++)
 {
 	# code ...

 	$text . = rand(0,9)
 }

 return $text;
}
