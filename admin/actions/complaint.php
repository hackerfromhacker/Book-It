<?php
	include("../auth.php");
	include('../../connect/db.php');
$id = $_POST['id'];
$reply = $_POST['reply'];

$reply_date=date("Y-m-d");

$db->prepare("UPDATE complaint SET reply = '$reply',reply_date='$reply_date' WHERE id = '$id'")->execute();
?>
<script>
    window.location.href = '../complaint_reply.php';
</script>