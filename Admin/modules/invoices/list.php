<style type="text/css">
	.list-invoices{
		padding: 16px;

	}
	 table{
	 	text-align: center;
	 	position: relative;
        
	 }
	.list-invoices tr,td,th{
		border: 2px solid black;

	}
	tr:nth-child(even){
		background-color: pink;

	}
	tr:hover {
		background-color: skyblue;

	}
	table,tr,td,th{
		border-collapse: collapse;
		font-size: 20px;
	}
</style>
<?php
$tittle = "Quản lí hóa đơn";
require_once("layout/header.php");
?>
<?php
$sql="SELECT * FROM invoices ORDER BY created_at DESC";
$result= mysqli_query($conn,$sql);
if($result==false)die("error".mysqli_error($conn));
	?>
<div class="list-invoices">
	<h2>Quản lí hóa đơn</h2><br>
	<table style="width: 90%;background-color:#F2F5A9;margin: auto; ">
		<tr>
			<th>Mã hóa đơn</th>
			<th>Ngày đặt hàng</th>
			<th>Tổng tiền</th>
			<th>Người đặt</th>
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
				echo "<a href='index.php?module=invoices&action=details&id=$id_invoice'>$id_invoice</a>";
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
					echo "<button><a href='index.php?module=invoices&action=approve&id=$id_invoice'>Duyệt đơn hàng</a></button>";
				elseif($row['stt']==1)
                echo "<button><a href='index.php?module=invoices&action=success&id=$id_invoice'>Xác nhận thành công</a></button>";
				
				echo "</td>";
				echo"</tr>";
			}
		}
		?>
	</table>
	</div>
	<div style="height: 300px; border-bottom: 2px dotted gray;position: relative;top: 500px;">
		<p style=" position: relative; top: 300px; font-size: 25px;margin-left: 10px;"><i class='fas fa-map-marker-alt' style='font-size:23px;color:red;margin-right: 10px;'></i>Địa chỉ liên hệ</p>
		<p style="position: relative;top: 320px;font-size: 25px;"><i class='fas fa-building' style='font-size:24px;margin-right: 10px;'></i>A17 Tạ Quang Bửu , phường Bách khoa , quận Hai Bà Trưng , Hà Nội</p>
		<p style="position: relative;top: 330px;font-size: 22px;"><i class="fa fa-phone" style="font-size:25px;margin-right: 10px;"></i>SĐT:012345679</p>
	</div>
	
<?php
require_once("layout/footer.php");
?>