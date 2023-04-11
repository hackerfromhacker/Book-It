
<?php
	include('../../connect/db.php');

$prbk_id = $_GET['prbk_id'];

$db->prepare("delete from booking_books where prbk_id = '$prbk_id'")->execute();

header("location:../request_books.php");
?>