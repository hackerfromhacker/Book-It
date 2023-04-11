<?php
	include("../auth.php");
	include('../../connect/db.php');

$id = $_POST['id'];
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

$pblsh = $_POST['pblsh'];
$pyr = $_POST['pyr'];

$db->prepare("UPDATE books SET cntno= '$cntno',addrs= '$addrs',email= '$email',product_name = '$product_name', product_sub = '$product_sub', category = '$category', qty = '$qty', price = '$price', discount = '$discount', description = '$description', pblsh = '$pblsh', pyr = '$pyr' WHERE id = '$id'")->execute();

$photo_1 = $_FILES["photo_1"]["name"];
if ($photo_1 != '') {
    $image = addslashes(file_get_contents($_FILES['photo_1']['tmp_name']));
    $image_name = addslashes($_FILES['photo_1']['name']);
    $image_size = getimagesize($_FILES['photo_1']['tmp_name']);
    $ext = pathinfo($_FILES['photo_1']['name'], PATHINFO_EXTENSION);
    $photo_1 = "IMG" . rand(9874475896, 1) . '.' . $ext;
    move_uploaded_file($_FILES["photo_1"]["tmp_name"], "../../photos/" . $photo_1);
    $db->prepare("UPDATE books SET photo_1 = '$photo_1' WHERE id = '$id'")->execute();
}
$photo_2 = $_FILES["photo_2"]["name"];
if ($photo_2 != '') {
    $image = addslashes(file_get_contents($_FILES['photo_2']['tmp_name']));
    $image_name = addslashes($_FILES['photo_2']['name']);
    $image_size = getimagesize($_FILES['photo_2']['tmp_name']);
    $ext = pathinfo($_FILES['photo_2']['name'], PATHINFO_EXTENSION);
    $photo_2 = "IMG" . rand(9874475896, 1) . '.' . $ext;
    move_uploaded_file($_FILES["photo_2"]["tmp_name"], "../../photos/" . $photo_2);
    $db->prepare("UPDATE books SET photo_2 = '$photo_2' WHERE id = '$id'")->execute();
}

header("location:../books_edit.php");
?>
