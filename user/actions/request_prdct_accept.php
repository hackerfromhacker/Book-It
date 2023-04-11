<?php
	include('../../connect/db.php');

$prbk_id = $_GET['prbk_id'];

$db->prepare("update  booking_books set sstatus='Accept' where prbk_id = '$prbk_id'")->execute();

header("location:../order_books.php");
?>