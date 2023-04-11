<?php
	include("../auth.php");
	include('../../connect/db.php');
	
	$user_id=$_SESSION['SESS_CUSTOMER_ID'];
	$result = $db->prepare("select * from users where user_id='$user_id'");
	$result->execute();
	for($i=0; $rows = $result->fetch(); $i++)
	{
		$ULog_Id=$rows['user_id'];
		$cname=$rows['fname'];
		
		$cdprmnt=$rows['dprtmnt'];
		$csemester=$rows['semester'];
		
		$cphone=$rows['phone'];
		$caddrs=$rows['addrs'];	
		$csex=$rows['sex'];	
	}
	$id=$_GET['id'];
	$result = $db->prepare("select * from books where id='$id'");
	$result->execute();
	for($i=0; $rows = $result->fetch(); $i++)
	{
		$SLog_Id=$rows['user_id'];
		
		$sname=$rows['sname'];
		$sdprmnt=$rows['dprmnt'];
		$ssemester=$rows['semester'];
		
		$pblsh=$rows['pblsh'];
		$pyr=$rows['pyr'];
		
		$scntno=$rows['cntno'];
		$saddrs=$rows['addrs'];
		$semail=$rows['email'];	
		$product_name=$rows['product_name'];	
		$product_sub=$rows['product_sub'];	
		$qty=$rows['qty'];	
		$price=$rows['price'];	
		$photo_1=$rows['photo_1'];	
	}
	
	$sstatus="Pending";
	$dstats="Pending";
	$porder="Product";
	$date=date("Y-m-d");
		
	
$db->prepare("INSERT INTO booking_books (ULog_Id,SLog_Id,scntno,saddrs,semail,cname,cphone,caddrs,csex,product_name,qty,price,photo_1,sstatus,dstats,date,sname,sdprmnt,ssemester,cdprmnt,csemester,porder,pblsh,pyr,product_sub) VALUES ('$ULog_Id','$SLog_Id','$scntno','$saddrs','$semail','$cname','$cphone','$caddrs','$csex','$product_name','$qty','$price','$photo_1','$sstatus','$dstats','$date','$sname','$sdprmnt','$ssemester','$cdprmnt','$csemester','$porder','$pblsh','$pyr','$product_sub')")->execute();

header("location:../request_books.php");
?>