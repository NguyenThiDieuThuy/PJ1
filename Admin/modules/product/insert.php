<?php
if(isset($_POST['btn'])){
	$name=$_POST['name'];
	$price=$_POST['price'];
	$description=$_POST['description'];
	$stt=$_POST['stt'];
	$id_type=$_POST['type'];
	$id_origin=$_POST['origin'];
	$folder="../public/images/";
	$img = $_FILES['url']['name'];
	$url =$folder.$img;
	move_uploaded_file($_FILES['url']['tmp_name'],$url);
		$sql="INSERT INTO products VALUES (null,'$name','$url','$price','$description','$stt','$id_type','$id_origin')";
	$result=mysqli_query($conn,$sql);
	echo $sql;
	if ($result==false) {
		echo "Error:".mysqli_error($conn);
	}
	else{
		header("Location:index.php?module=product&action=list");
	}
}

?>
<?php
$tittle = "Thêm sản phẩm";
require_once("layout/header.php");
?>
<style type="text/css">
	.insert-product {
		
		text-align: center;
		position: relative;
		left: 110px;
		font-size:100px-large;
		top: 100px;
	}
	.insert-product input {
		font-size: larger;
		text-align: center;
		position: relative;
		left: 10px;
		height: 30px;
	}
	button:hover{
		border-color:  pink;
		background-color: pink;
		box-shadow: 8px 8px 8px 8px skyblue;
	}
		
</style>
<script src="ckeditor/ckeditor.js"></script>
<div class="insert-product">
	<form method="POST" enctype="multipart/form-data">
	<label style="float: left;margin-left: 60px;">
		<h2>Tên sản phẩm</h2><br>
		<input type="text" name="name" required placeholder="Tên sản phẩm">
	</label>
	<label >
		<h2>Giá sản phẩm</h2><br>
		<input type="text" name="price" required placeholder="Giá sản phẩm">  
		<p>/Kg</p>
	</label><br><br>
	
	<label style="float: left;position: relative;top: 80px;margin-left: 60px;">
		<h2>Tình trạng sản phẩm</h2><br>
		<select name="stt" style="width: 200px;height: 30px;font-size: 20px;">
			<option value="1">Sẵn hàng</option>
			<option value="">Hết hàng</option>
			<option value="2">Hàng sắp về</option>
			
		</select>
	</label>
	<label style="position: relative;top:90px;">
		<h2>Xuất xứ</h2><br>
		<select name="origin" style="font-size: 20px;width: 200px;height: 30px;">
			<?php
			$sql="SELECT id, name FROM origin";
			$result=mysqli_query($conn,$sql);
			if($result==false){
				echo "error".mysqli_error($conn);
			}
			else if(mysqli_num_rows($result) > 0){
				foreach ($result as $row ) {
					$id_origin =$row['id'];
				echo "<option value='$id_origin'>";
				   echo $row['name'];
				echo "</option>";
				
				
			}
		}
			?>
		</select>

	</label><br><br>
	<label style="float: left;position: relative;top: 200px;margin-left: 60px;">
		<h2>Loại</h2><br>
		<select name="type" style="font-size: 20px;width: 200px;height: 30px;">
			<?php
			$sql="SELECT id, name FROM type";
			$result=mysqli_query($conn,$sql);
			if($result==false){
				echo "error".mysqli_error($conn);
			}
			else if(mysqli_num_rows($result) > 0){
				foreach ($result as $row ) {
					$id_type =$row['id'];
				echo "<option value='$id_type'>";
				   echo $row['name'];
				echo "</option>";
			}
		}
			?>
		</select>

	</label>

	<label style="position: relative;top: 200px;">
		<h2>Ảnh sản phẩm</h2><br><br>
		<input type="file" name="url" accept="*/images" required>
	</label><br><br>
	<label style="position: relative;text-align: center;top: 300px;">
		<h2 style="margin-right: 300px;">Mô tả</h2><br><br>
		<textarea name="description" cols="60" rows="10" style="text-align: center;position: relative;margin-right: 300px;"  name="email" id="email" ></textarea>
	</label><br><br>
	<button style="position: relative;top: 300px;margin-right: 280px;border-radius: 5px;width: 200px;font-size: 20px;height: 30px;" type="submit" name="btn">Thêm sản phẩm</button>
</form>
</div>
<script type="text/javascript">
	CKEDITOR.replace('email');
</script>
	
<?php
require_once("layout/footer.php");
?>
	