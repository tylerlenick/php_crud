<?php
//show errors: at least 1 and 4...
ini_set('display_errors', 1);
//ini_set('log_errors', 1);
//ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

//use for inital test of form inputs
//exit(print_r($_POST));

//Get item data
//no need for pst_id when adding, uses auto increment
$pst_name_v = $_POST['name'];
$pst_street_v = $_POST['street'];
$pst_city_v = $_POST['city'];
$pst_state_v = $_POST['state'];
$pst_zip_v = $_POST['zip'];
$pst_phone_v = $_POST['phone'];
$pst_email_v = $_POST['email'];
$pst_url_v = $_POST['url'];
$pst_ytd_sales_v = $_POST['ytd_sales'];
$pst_notes_v = $_POST['notes'];

$pattern='/^[a-zA-Z\s]+$/';
$valid_city = preg_match($pattern,$pst_city_v);


$pattern='/^[a-zA-Z]{2,2}+$/';
$valid_state = preg_match($pattern,$pst_state_v);

$pattern='/^\d{5,9}+$/';
$valid_zip = preg_match($pattern,$pst_zip_v);

$pattern='/^\d{10}+$/';
$valid_phone = preg_match($pattern,$pst_phone_v);

$pattern='/^\d{1,8}(?:\.\d{0,2})?$/';
$valid_ytd_sales = preg_match($pattern,$pst_ytd_sales_v);

if
(
empty($pst_name_v)||
empty($pst_street_v)||
empty($pst_city_v)||
empty($pst_state_v)||
empty($pst_zip_v)||
empty($pst_phone_v)||
empty($pst_email_v)||
empty($pst_url_v)||
!isset($pst_ytd_sales_v)
)
{
	$error = "All fields require data, except <b>Notes</b>. Check all fields and try again.";
	include('global/error.php');
}

else if(!is_numeric($pst_ytd_sales_v)|| $pst_ytd_sales_v <=0)
{
	$error = 'YTD Sales can only contain numbers (other than a decimal point); and must be equal to or greater than zero.';
	include('global/error.php');
}

else if($valid_city === false)
{
	echo 'Error in pattern!';
}

else if($valid_city === 0)
{
	$error = 'Can only contain letter!';
	include('global/error.php');
}

else if($valid_state === false)
{
	echo 'Error in pattern!';
}

else if($valid_state === 0)
{
	$error = 'Can only contain two letter!';
	include('global/error.php');
}

else if($valid_zip === false)
{
	echo 'Error in pattern!';
}

else if($valid_zip === 0)
{
	$error = 'Zip must contain 5 - 9 digist and no other characters.';
	include('global/error.php');
}

else if($valid_phone === false)
{
	echo 'Error in pattern!';
}

else if($valid_phone === 0)
{
	$error = 'Phone must contain 10 digist, and no other characters';
	include('global/error.php');
}
else if($valid_ytd_sales === false)
{
	exit('Error in pattern!');
}
else if($valid_ytd_sales === 0)
{
	$error = 'Sales must contain no more than 10 digists, uncluding a decimal point.';
	include('global/error.php');
}

else
{
	
/*Require_once('global/connection.php');

$query =
"INSERT INTO petstore
(pst_name,pst_street,pst_city,pst_state,pst_zip,pst_phone,pst_email,pst_url,pst_ytd_sales,pst_notes)
VALUES
(:pst_name_v, :pst_street_v, :pst_city_v, :pst_state_v, :pst_zip_v, :pst_phone_v, :pst_email_v, :pst_url_v, :pst_ytd_sales_v, :pst_notes_v)";

try
{
	$statement = $db->prepare($query);
	$statement->bindParam(':pst_name_v',$pst_name_v);
	$statement->bindParam(':pst_street_v',$pst_street_v);
	$statement->bindParam(':pst_city_v',$pst_city_v);
	$statement->bindParam(':pst_state_v',$pst_state_v);
	$statement->bindParam(':pst_zip_v',$pst_zip_v);
	$statement->bindParam(':pst_phone_v',$pst_phone_v);
	$statement->bindParam(':pst_email_v',$pst_email_v);
	$statement->bindParam(':pst_url_v',$pst_url_v);
	$statement->bindParam(':pst_ytd_sales_v',$pst_ytd_sales_v);
	$statement->bindParam(':pst_notes_v',$pst_notes_v);
	$statement->execute();
	$statement->closeCursor();
	
	$last_auto_increment_id = $db->lastInsertId();
	
}

catch(PDOEXception$e)
{
	$error = $e->getMessage();
	echo $error;
} */

require_once"global/connection.php";

require_once"global/functions.php";

add_petstore
(
	$pst_name_v,
	$pst_street_v,
	$pst_city_v,
	$pst_state_v,
	$pst_zip_v,
	$pst_phone_v,
	$pst_email_v,
	$pst_url_v,
	$pst_ytd_sales_v,
	$pst_notes_v
);











//include('index.php'); //forwarding is faster, one trip to server
header('Location: index.php'); //sometimes, redirecting is needed (two trips to server)
}
?>
