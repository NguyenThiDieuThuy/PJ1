<?php
if(isset($id_product))
if(isset($_POST['btncheck'])){
	$receiver=$_POST['receiver'];
	$phone=$_POST['phone'];
	$addr=$_POST['addr'];
	$total_amount=$_SESSION['total_amount'];
	$id_customers=$_SESSION['user']['id'];
	$sql="INSERT INTO invoices VALUES(null,current_timestamp(),'$total_amount','$receiver','$addr','$phone',0,null,'$id_customers')";
	$result=mysqli_query($conn,$sql);
	if($result==false){
		echo "error".mysqli_error($conn);
	}
	else{
		$id_invoice=mysqli_insert_id($conn);
		foreach($_SESSION['cart'] as $id_product => $quantity){
			$sql="INSERT INTO invoice_detail VALUES ('$id_invoice','$id_product','$quantity')";
			$result=mysqli_query($conn,$sql);
			if($result==false)echo "error".mysqli_error($conn);
		} 
		unset($_SESSION['cart']);
		unset($_SESSION['total_amount']);
	}
}
?>

    
<?php
$tittle="Giỏ hàng";
require_once("layout/header.php");
?>
<form method="POST">
	<h1>Thông tin người nhận</h1>

	<input type="text" name="name">
	<input type="text" name="phone">
	<input type="text" name="addr">
	<button type="submit" name="btncheck">Thanh toán</button>
</form>
<?php
if(isset($btncheck)){
 echo"<div style='padding: 16px;'>
	<h1>Đặt hàng thành công  mã đơn hàng #<a href='index.php?module=invoice&action=details&id=<?php echo $id_invoice ?>'><?php echo $id_invoice ;?></a><i class='fas fa-check' style='font-size:48px;color:red'></i></h1>
	
</div>";
}
?>
<div>
	<p style=" position: relative; top: 300px; font-size: 25px;margin-left: 10px;"><i class='fas fa-map-marker-alt' style='font-size:23px;color:red;margin-right: 10px;'></i>Địa chỉ liên hệ</p>
		<p style="position: relative;top: 320px;font-size: 25px;"><i class='fas fa-building' style='font-size:24px;margin-right: 10px;'></i>A17 Tạ Quang Bửu , phường Bách khoa , quận Hai Bà Trưng , Hà Nội</p>
		<p style="position: relative;top: 330px;font-size: 22px;"><i class="fa fa-phone" style="font-size:25px;margin-right: 10px;"></i>SĐT:012345679</p>
</div>
<?php
require_once("layout/footer.php");
?>