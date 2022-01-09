<?php
if(isset($_GET['id'])){
	$id_invoice= $_GET['id'];
	$sql="UPDATE invoices SET stt=1 WHERE id=$id_invoice";
	$result=mysqli_query($conn,$sql);
	if($result==false){
		echo "error".mysqli_error($conn);
	}
	else{
		header("Location:index.php?module=invoices&action=list");
		die();

	}
}
?>