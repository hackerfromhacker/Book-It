<?php
	include("../auth.php");
	include('../../connect/db.php');
	$user_id=$_SESSION['SESS_CUSTOMER_ID'];
	
$product_name = $_POST['product_name'];
$product_sub = $_POST['product_sub'];
$category = $_POST['category'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$description = $_POST['description'];

$cntno = $_POST['cntno'];
$addrs = $_POST['addrs'];
$email = $_POST['email'];
$dprmnt = $_POST['dprmnt'];
$sname = $_POST['sname'];
$semester = $_POST['semester'];

$pblsh = $_POST['pblsh'];
$pyr = $_POST['pyr'];


$date = date("Y-m-d");

$image = addslashes(file_get_contents($_FILES['photo_1']['tmp_name']));
$image_name = addslashes($_FILES['photo_1']['name']);
$image_size = getimagesize($_FILES['photo_1']['tmp_name']);
$ext = pathinfo($_FILES['photo_1']['name'], PATHINFO_EXTENSION);
$photo_1 = "IMG" . rand(9874475896, 1) . '.' . $ext;
move_uploaded_file($_FILES["photo_1"]["tmp_name"], "../../photos/" . $photo_1);

$image = addslashes(file_get_contents($_FILES['photo_2']['tmp_name']));
$image_name = addslashes($_FILES['photo_2']['name']);
$image_size = getimagesize($_FILES['photo_2']['tmp_name']);
$ext = pathinfo($_FILES['photo_2']['name'], PATHINFO_EXTENSION);
$photo_2 = "IMG" . rand(9874475896, 1) . '.' . $ext;
move_uploaded_file($_FILES["photo_2"]["tmp_name"], "../../photos/" . $photo_2);



$db->prepare("INSERT INTO books (cntno,addrs,email,user_id, product_name, product_sub, category, qty, price, discount, description, photo_1, photo_2, pblsh, pyr,dprmnt,semester,sname,date) VALUES ('$cntno','$addrs','$email','$user_id','$product_name', '$product_sub', '$category', '$qty', '$price', '$discount', '$description', '$photo_1', '$photo_2', '$pblsh', '$pyr','$dprmnt','$semester','$sname','$date')")->execute();

header("location:../books_search.php");
?>