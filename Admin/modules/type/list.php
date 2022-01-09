<?php
$tittle = "Quản lí loại";
require_once("layout/header.php");
?>
<style type="text/css">
	.list-type{
		padding: 16px;

	}
	.list-type table{
		width: 80%;
		position: relative;
		left: 90px;
		text-align: center;

	}
	.list-type tr,td,th{
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
	table{
		position: relative;
		top: 100px;
	}
</style>
<div class="list-type">
	<a href="index.php?module=type&action=insert">
	<h2><i style="color: gray;margin-right: 10px;" class='fa fa-plus-circle'></i>
     Thêm loại</h2></a>
	<table>
		<tr>
			<th>ID</th>
			<th>Loại</th>
			
			<th colspan="4">Action</th>
		</tr>
		<?php
		$sql = "SELECT * FROM type";
		$result = mysqli_query($conn,$sql);
		if($result==false){
			echo "error".mysqli_error($conn);
		}
		else if(mysqli_num_rows($result)==0){
			echo "<tr><th colspan='5'>Danh sách rỗng</th></tr>";
		}
			else{
				foreach ($result as $row) {
					echo "<tr>";
					$id=$row['id'];
					echo "<td>".$id."</td>";
					echo "<td>".$row['name']."</td>";
					
					echo "<td>";
					echo "<a href='index.php?module=type&action=edit&id=$id'><i class='fa fa-edit'></i>
					Sửa</a>";
					echo "</td>";
					echo "<td>";
					echo "<a href='index.php?module=type&action=delete&id=$id'><i class='fa fa-eraser'></i>Xóa</a>";
					echo "</td>";
					echo"</tr>";
				}
			}
		
		?>
	</table>
</div>
<div style="height: 300px; border-bottom: 2px dotted gray;position: relative;top: 900px;">
		<p style=" position: relative; top: 300px; font-size: 25px;margin-left: 10px;"><i class='fas fa-map-marker-alt' style='font-size:23px;color:red;margin-right: 10px;'></i>Địa chỉ liên hệ</p>
		<p style="position: relative;top: 320px;font-size: 25px;"><i class='fas fa-building' style='font-size:24px;margin-right: 10px;'></i>A17 Tạ Quang Bửu , phường Bách khoa , quận Hai Bà Trưng , Hà Nội</p>
		<p style="position: relative;top: 330px;font-size: 22px;"><i class="fa fa-phone" style="font-size:25px;margin-right: 10px;"></i>SĐT:012345679</p>
	</div>
<?php
require_once("layout/footer.php");
?>