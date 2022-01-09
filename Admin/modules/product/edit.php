<?php
$id=$name=$price=$url=$description=$stt=$id_origin=$id_type="";
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="SELECT * FROM products WHERE id='$id'";
	$result=mysqli_query($conn,$sql);
	if ($result==false) {
		echo "Error:".mysqli_error($conn);
	}
	else if(mysqli_num_rows($result)==1){
		
		$row=mysqli_fetch_assoc($result);
		$name=$row['name'];
		$price=$row['price'];
	    $description=$row['description'];
	    $stt=$row['stt'];
	    $type=$row['id_type'];
	    $origin=$row['id_origin'];
	    $url=$row['url'];
	}
}
if(isset($_POST['btn'])){
	$name=$_POST['name'];
	$price=$_POST['price'];
	$description=$_POST['description'];
	$stt=$_POST['stt'];
	$id_type=$_POST['type'];
	$id_origin=$_POST['origin'];
	if($_FILES['url']['size'] >0){
		$folder="../public/images/";
		$img = $_FILES['url']['name'];
	    $url =$folder.$img;
	
	$img = $_FILES['url']['name'];
	$url =$folder.$img;
	move_uploaded_file($_FILES['url']['tmp_name'],$url);
}
		$sql="UPDATE products SET name='$name',url='$url',price='$price',description='$description',stt='$stt', id_type='$id_type',id_origin='$id_origin' WHERE id='$id'";
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
$tittle = "Cập nhật thông tin sản phẩm";
require_once("layout/header.php");
?>
<style type="text/css">
	.edit-product {
		
		text-align: center;
		position: relative;
		left: 110px;
		font-size:100px-large;
	}
	.edit-product input {
		font-size: larger;
		text-align: center;
		position: relative;
		left: 10px;
	}
	
</style>
<div class="edit-product">
	<form method="POST" enctype="multipart/form-data">
	<label>
		<h2>Tên sản phẩm</h2><br>
		<input type="text" name="name" required placeholder="Tên sản phẩm" value="<?php echo $name ; ?>">
	</label><br><br>
	<label>
		<h2>Giá sản phẩm</h2><br>
		<input type="text" name="price" required placeholder="Giá sản phẩm" value="<?php echo $price; ?>"><br>/Kg
	</label><br><br>
	
	<label>
		<h2>Tình trạng sản phẩm</h2><br>
		<select name="stt">
			<option value="1" <?php if ($stt ==1)echo"selected";?>>Sẵn hàng</option>
			<option value="0"<?php if ($stt ==0)echo "selected";?>>Hết hàng</option>
			<option value="2"<?php if ($stt ==2)echo "selected";?>>Hàng sắp về</option>
			
		</select>
	</label><br><br>
	<label>
		<h3>Xuất xứ</h3><br>
		<select name="origin">
			<?php
			$sql="SELECT id, name FROM origin";
			$result=mysqli_query($conn,$sql);
			if($result==false){
				echo "error".mysqli_error($conn);
			}
			else if(mysqli_num_rows($result) > 0){
				foreach ($result as $row ) {
					$id_origin =$row['id'];
					if($id_origin == $origin) $selected="selected";
					else $selected ="";
				echo "<option value='$id_origin'  $selected >";
				   echo $row['name'];
				echo "</option>";
				
				
			}
		}
			?>
		</select>

	</label><br><br>
	<label>
		<h2>Loại</h2><br>
		<select name="type">
			<?php
			$sql="SELECT id,name FROM type ";
			$result=mysqli_query($conn,$sql);
			if($result==false){
				echo "error".mysqli_error($conn);
			}
			else if(mysqli_num_rows($result) > 0){
				foreach ($result as $row ) {
					$id_type =$row['id'];
					if($id_type == $type) $selected = "selected";
					else $selected="";
				echo "<option value='$id_type' $selected >";
				   echo $row['name'];
				echo "</option>";
			}
		}
			?>
		</select>

	</label><br><br>
	<label>
		<h2>Ảnh sản phẩm</h2><br><br>
		<input type="file" name="url" accept="*/images" required>
	</label><br><br>
	<label>
		<h2>Mô tả</h2><br><br>
		<textarea name="description" cols="60" rows="10"><?php echo $description ; ?></textarea>
	</label><br><br>
	<button type="submit" name="btn">Thêm sản phẩm</button>
</form>
</div>
	

<?php
require_once("layout/footer.php");
?>