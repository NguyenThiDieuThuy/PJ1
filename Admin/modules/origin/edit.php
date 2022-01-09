<?php
$name="";
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="SELECT* FROM origin WHERE id='$id'";
	$result=mysqli_query($conn,$sql);
	if ($result==false) {
		echo "Error:".mysqli_error($conn);
	}
	else if(mysqli_num_rows($result)==1){
		$row=mysqli_fetch_assoc($result);
		$name=$row['name'];
	}
}
if(isset($_POST['btn'])){
	$name=$_POST['name'];
	$sql="UPDATE origin SET name='$name' WHERE id='$id'";
	$result=mysqli_query($conn,$sql);
	if ($result==false) {
		echo "Error:".mysqli_error($conn);
	}
	else{
		header("Location:index.php?module=origin&action=list");
	}
}
?>
<?php
$tittle = "Cập nhật thông tin nguồn gốc , xuất xứ";
require_once("layout/header.php");
?>
<style type="text/css">
	.edit-origin  {
		
		text-align: center;
		position: relative;
		left: 110px;
		font-size:100px-large;
	}
	.edit-origin input {
		font-size: larger;
		text-align: center;
		position: relative;
		left: 10px;
	}
</style>
<div class="edit-origin">
	<form method="POST">
	<label>
		<h1><b>Xuất xứ</b></h1><br>
		<input type="text" name="name" required placeholder="Origin" value="<?php echo $name ; ?>">
	</label><br><br>
	<button type="submit" name="btn">Cập nhật xuất xứ</button>
</form>
</div>

<?php
require_once("layout/footer.php");
?>