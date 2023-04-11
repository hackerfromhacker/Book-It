<?php
	include("../auth.php");
	include('../../connect/db.php');
	$user_id=$_SESSION['SESS_ADMIN_ID'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$db->prepare("UPDATE users SET fname = '$fname', lname = '$lname', phone = '$phone', password = '$password' WHERE user_id = '$user_id'")->execute();

$photo = $_FILES["photo"]["name"];
if ($photo != '') {
    $image = addslashes(file_get_contents($_FILES['photo']['tmp_name']));
    $image_name = addslashes($_FILES['photo']['name']);
    $image_size = getimagesize($_FILES['photo']['tmp_name']);
    $ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    $photo = "IMG" . rand(9874475896, 1) . '.' . $ext;
    move_uploaded_file($_FILES["photo"]["tmp_name"], "../../photos/" . $photo);
    $db->prepare("UPDATE users SET photo = '$photo' WHERE user_id = '$user_id'")->execute();
}

?>
<script>
    window.location.href = '../profile.php?updated';
</script>