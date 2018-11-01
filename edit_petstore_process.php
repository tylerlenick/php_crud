 <?php
//show errors: at least 1 and 4...
ini_set('display_errors', 1);
//ini_set('log_errors', 1);
//ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

//use for inital test of form inputs
//exit(print_r($_POST));

//Get item data
$pst_id_v = $_POST['pst_id'];
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

$pattern='/^[a-zA-Z0-9,\s.]+$/';
$valid_street = preg_match($pattern, $pst_street_v);

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

else if($valid_street ===false)
{
	echo'Error in pattern!';
}

else if ($valid_street ===0)
{
	$error = 'Street can only contain numbers, letter, commas, and periods.';
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
	$error = 'Sales must contain no more than 10 digists, including a decimal point.';
	include('global/error.php');
}

else
{
	
/*require_once('global/connection.php');

$query =
"UPDATE petstore
SET
	pst_name = :pst_name_p,
	pst_street = :pst_street_p,
	pst_city = :pst_city_p,
	pst_state = :pst_state_p,
	pst_zip = :pst_zip_p,
	pst_phone = :pst_phone_p,
	pst_email = :pst_email_p,
	pst_url = :pst_url_p,
	pst_ytd_sales = :pst_ytd_sales_p,
	pst_notes = :pst_notes_p
WHERE pst_id = :pst_id_p";

try
{
	$statement = $db->prepare($query);
	$statement->bindParam(':pst_id_p',$pst_id_v);
	$statement->bindParam(':pst_name_p',$pst_name_v);
	$statement->bindParam(':pst_street_p',$pst_street_v);
	$statement->bindParam(':pst_city_p',$pst_city_v);
	$statement->bindParam(':pst_state_p',$pst_state_v);
	$statement->bindParam(':pst_zip_p',$pst_zip_v);
	$statement->bindParam(':pst_phone_p',$pst_phone_v);
	$statement->bindParam(':pst_email_p',$pst_email_v);
	$statement->bindParam(':pst_url_p',$pst_url_v);
	$statement->bindParam(':pst_ytd_sales_p',$pst_ytd_sales_v);
	$statement->bindParam(':pst_notes_p',$pst_notes_v);
	$row_count = $statement->execute();
	$statement->closeCursor();
	
	//exit($row_count);
	
	
}

catch(PDOEXception$e)
{
	$error = $e->getMessage();
	echo $error;
} */

require_once"global/connection.php";

require_once"global/functions.php";

edit_petstore
(
	$pst_id_v,
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
