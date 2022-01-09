<?php
if(!isset($_SESSION['user']['id'])){
	header("Location:index.php");
	die();
}
?>
<style type="text/css">
	table,tr,td,th{
		border: 1px solid black;
		border-collapse: collapse;

	}
	tr:nth-child(even){
		background-color: pink;

	}
	tr:hover {
		background-color: skyblue;

	}
</style>
<?php
$tittle="Lịch sử mua hàng";
require_once("layout/header.php");
?>
<?php
$id_customers=$_SESSION['user']['id'];
$sql="SELECT * FROM invoices WHERE id_customers='$id_customers'";
$result=mysqli_query($conn,$sql);
if($result==false){
die("error".mysqli_error($conn));
}

?>
<div class="history">
	<h1><i class='fas fa-clipboard-list' style='font-size:27px;color: gray;margin-right: 10px;margin-left: 10px;'></i>Lịch sử mua hàng</h1>
	<table style="width: 90%;margin: auto;text-align: center;background-color:#F2F5A9; ">
		<tr>
			<th>Mã hóa đơn</th>
			<th>Ngày đặt hàng</th>
			<th>Tổng tiền</th>
			<th>Người nhận</th>
			<th>Số điện thoại</th>
			<th>Địa chỉ</th>
			<th>Trạng thái</th>
		</tr>
		<?php
		if(mysqli_num_rows($result)==0){
			echo "<h2>Chưa có hóa đơn</h2>";

		}
		else{
			foreach($result as $row){
				echo "<tr>";
				echo "<td>";
				$id_invoice=$row['id'];
				echo "<a href='index.php?module=invoice&action=details&id=$id_invoice'>$id_invoice</a>";
				echo "</td>";
				echo "<td>".$row['created_at']."</td>";
				echo "<td>".$row['total_amounts']."</td>";
				echo "<td>".$row['receiver']."</td>";
				echo "<td>".$row['phone']."</td>";
				echo "<td>".$row['addr']."</td>";

				echo "<td>";
				$arrStt =array(0=>"Chưa duyệt",1=>"đã duyệt",2=>"Thành công",-1=>"Đã hủy");
				echo $arrStt[$row['stt']];
				
				if($row['stt']==0) 
					echo "<button><a href='index.php?module=invoice&action=cancel&id=$id_invoice'>Hủy đơn hàng</a></button>";
				echo "</td>";
				echo"</tr>";
			}
		}
		?>
	</table>
</div>
<div style="height: 300px; border-bottom: 2px dotted gray;position: relative; top: 1100px;">
		<p style=" position: relative; top: 300px; font-size: 25px;margin-left: 10px;"><i class='fas fa-map-marker-alt' style='font-size:23px;color:red;margin-right: 10px;'></i>Địa chỉ liên hệ</p>
		<p style="position: relative;top: 320px;font-size: 25px;"><i class='fas fa-building' style='font-size:24px;margin-right: 10px;'></i>A17 Tạ Quang Bửu , phường Bách khoa , quận Hai Bà Trưng , Hà Nội</p>
		<p style="position: relative;top: 330px;font-size: 22px;"><i class="fa fa-phone" style="font-size:25px;margin-right: 10px;"></i>SĐT:012345679</p>
	</div>
<?php
require_once("layout/footer.php"); 
?>