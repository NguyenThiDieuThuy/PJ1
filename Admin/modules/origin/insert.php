<?php
$name="";
if(isset($_POST['btn'])){
	$name=$_POST['name'];
	
	$sql="INSERT INTO origin VALUES (null,'$name')";
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
$tittle = "Thêm nguồn gốc , xuất xứ";
require_once("layout/header.php");
?>
<style type="text/css">
	.insert-origin  {
		
		text-align: center;
		position: relative;
		left: 110px;
		font-size:100px-large;
	}
	.insert-origin input {
		font-size: larger;
		text-align: center;
		position: relative;
		left: 10px;
	}
	form{
		position: relative;
		margin-right: 250px;
		top: 100px;
	}
		
</style>
<div class="insert-origin">
	<form method="POST">
	
	<label>
		<h1><b>Xuất xứ</b></h1><br>
		<input type="text" name="name" required placeholder="Location">
	</label><br><br>
	<button type="submit" name="btn">Thêm xuất xứ</button>
</form>
</div>
	
<?php
require_once("layout/footer.php");
?>