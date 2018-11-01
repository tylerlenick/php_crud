<?php

ini_set('display_errors',1);

error_reporting(E_ALL);

$pst_id_v = $_POST['pst_id'];

if (empty($pst_id_v))
{
	$error = "Invalid data. Check field and try again.";
	include('global/error.php');
}

else
{
	require_once('global/connection.php');
	
	require_once "global/functions.php";
	
	delete_petstore($pst_id_v);


header('Location: index.php');
}
?>