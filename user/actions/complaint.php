<?php
	include("../auth.php");
	include('../../connect/db.php');
$user_id = $_SESSION['SESS_CUSTOMER_ID'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$dated = $_POST['dated'];

$reply="pending";

$db->prepare("INSERT INTO complaint (user_id, name, phone, email, subject,dated,reply) VALUES ('$user_id', '$name', '$phone', '$email', '$subject','$dated','$reply')")->execute();
?>
<script>
    window.location.href = '../complaint_view.php';
</script>