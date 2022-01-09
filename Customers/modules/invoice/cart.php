<?php
if(!isset($_SESSION['cart'])){
 $_SESSION['cart']= array();
} 
if(isset($_GET['id'])){
	$id =$_GET['id'];
      if (isset($_SESSION['cart'][$id])) {
		if(isset($_GET['up'])){
		 $_SESSION['cart'][$id] +=1;
		}
		if(isset($_GET['down'])){
			$_SESSION['cart'][$id]-= 1;
			if($_SESSION['cart'][$id]<0){ 
				$_SESSION['cart'][$id]= 0;
		}
      }
		
	}
	else{
		$_SESSION['cart'][$id]=1;


	}
	header("Location:index.php?module=invoice&action=cart");
	
	die();
}
//echo var_dump($_SESSION['cart']);
?>
<style type="text/css">
	.cart{
		padding: 16px;
	}
	.cart table{
		width: 50%;
		margin: auto;
		position: relative;
		top: 100px;


	}
	.cart table, tr,td,th{
		border: 1px solid black;
		border-collapse: collapse;
		text-align: center;
	}
	.btn{
		width: 30px;
		padding: 4px;
		margin: 8px;
	}
	input{
		width: 250px;
		height: 30px;
		text-align: center;
		font-size: 30px;
		border-radius: 5px;
		position: relative;
		top: 100px;
	}
	form{
		text-align: center;
		position: relative;
		top: 100px;
		
		width :70%;
		height: 500px;
		margin-left: 200px;
	}
	.ab{
		position: relative;
		top: 130px;
		font-size: 20px;
	}
	.th{
		background-color: #d6d6c2;
	}
	
</style>

<?php $tittle="Giỏ hàng";
require_once("layout/header.php");
?>
<div class="cart">
	<h1 style="text-align: center;position: relative;top: 50px;">Giỏ hàng của bạn</h1>
	<?php 
	if(isset($_SESSION['user']['id'])){
		echo "<a href='index.php?module=invoice&action=history'> *Lịch sử mua hàng</a>";
	}
	?>
	<table>
	<tr>
		<th class="th" >STT</th>
		<th class="th">Sản phẩm</th>
		<th class="th">Đơn giá</th>
		<th class="th">Số lượng</th>
		<th class="th">Thành tiền</th>
        <th class="th">Xoá sản phẩm</th>
	</tr>

	<?php
	$count = 0;
	$total_amount=0;
	foreach($_SESSION['cart'] as $id => $quantity){
		$count += 1;
		$sql="SELECT id,name, price,url FROM products WHERE id='$id'";
		$result=mysqli_query($conn,$sql);
		if($result == false) echo "error:".mysqli_error($conn);
		else if(mysqli_num_rows($result)==1){
			$row=mysqli_fetch_assoc($result);
			$name=$row['name'];
			$url=$row['url'];
			$price=$row['price'];
			$id_product=$row['id'];
			echo "<tr>";
			   echo "<td>".$count."</td>";
			    echo "<td>";
			        echo $name."<br>";
			        echo "<img src='$url' width='50px'>";
			    echo "</td>";
			    echo"<td>$price</td>";

			    echo "<td>";
			     echo "<a href='index.php?module=invoice&action=cart&id=$id&down'><button class='btn'>-</button></a>";
			    echo $quantity;
			     echo "<a href='index.php?module=invoice&action=cart&id=$id&up'><button class='btn'>+</button></a>";
			    echo "</td>";
			    echo "<td>". ($price*$quantity)."</td>";
			    $total_amount += $price*$quantity;
			    $_SESSION['total_amount']=$total_amount;
                 echo "<td style='width:70px;'><a href ='index.php?module=invoice&action=delete&id=$id'><i class='fa fa-trash'></i></a></td>";
         			echo "</tr>";


		}

	}
	echo "<tr>";
	 echo "<th colspan='4'>Tổng  tiền</th>";
	 echo "<th style='color:red;'>$total_amount</th>";
	echo "</tr>";
	?>
	
	
</table>
<div style="position: relative;left: 600px;top: 150px;">
<?php
     	if(isset($id_product)){
     		echo "<a href='index.php?module=invoice&action=check_out'<button>Mua hàng</button></a>";
     	}
 ?></div>
<?php
if(!isset($_SESSION['user']['id'])){
	echo "<button style='background:pink;margin-left:600px;position:relative;top:150px;height:30px;'>";
    echo "<a style='text-decoration:none;' href='index.php?module=common&action=login'>Đăng nhập để thanh toán</a>";
    echo "</button>";
}
else{
	$id_customers= $_SESSION['user']['id'];
	$sql="SELECT name,phone,addr FROM customers WHERE id ='$id_customers'";
	$result=mysqli_query($conn,$sql);
	if($result==false){
		echo "error".mysqli_error($conn);

	}
	else if(mysqli_num_rows($result)==1){
		$row=mysqli_fetch_assoc($result);
		$name=$row['name'];
		$phone=$row['phone'];
		$addr=$row['addr'];
	}
}
     ?>
     
     
     

   	

<div style="height: 300px; border-bottom: 2px dotted gray;position: relative; top: 600px;">
		<p style=" position: relative; top: 300px; font-size: 25px;margin-left: 10px;"><i class='fas fa-map-marker-alt' style='font-size:23px;color:red;margin-right: 10px;'></i>Địa chỉ liên hệ</p>
		<p style="position: relative;top: 320px;font-size: 25px;"><i class='fas fa-building' style='font-size:24px;margin-right: 10px;'></i>A17 Tạ Quang Bửu , phường Bách khoa , quận Hai Bà Trưng , Hà Nội</p>
		<p style="position: relative;top: 330px;font-size: 22px;"><i class="fa fa-phone" style="font-size:25px;margin-right: 10px;"></i>SĐT:012345679</p>
	</div>
<?php
require_once("layout/footer.php");
?>