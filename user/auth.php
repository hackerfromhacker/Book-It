<?php
session_start();
if(!isset($_SESSION['SESS_CUSTOMER_ID']) || (trim($_SESSION['SESS_CUSTOMER_ID']) == '')) {
	header("location:../");
	exit();
}

?>
