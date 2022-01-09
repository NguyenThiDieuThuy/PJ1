<?php
$name=$size="";
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql="SELECT* FROM type WHERE id='$id'";
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
	
	$sql="UPDATE type SET name='$name' WHERE id='$id'";
	$result=mysqli_query($conn,$sql);
	if ($result==false) {
		echo "Error:".mysqli_error($conn);
	}
	else{
		header("Location:index.php?module=type&action=list");
	}
}
?>
<?php
$tittle = "Cập nhật thông tin loại";
require_once("layout/header.php");
?>

<div class="edit-type">
	<form method="POST">
	<label>
		<h1><b>Loại hoa quả</b></h1><br>
		<input type="text" name="name" required placeholder="Name" value="<?php echo $name ; ?>">
	</label><br><br>
	
	<button type="submit" name="btn">Cập nhật loại</button>
</form>
</div>

<?php
require_once("layout/footer.php");
?>