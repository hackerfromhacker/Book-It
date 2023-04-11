<?php
	include('../../connect/db.php');

$id = $_GET['id'];

$db->prepare("DELETE FROM books WHERE id = '$id'")->execute();

header("location:../product_remove.php");
?>