<?php
$name="";
if(isset($_POST['btn'])){
	$name=$_POST['name'];
	
	$sql="INSERT INTO type VALUES (null,'$name')";
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
$tittle = "Thêm Loại";
require_once("layout/header.php");
?>
<style type="text/css">
	.insert-type {
		
		text-align: center;
		position: relative;
		left: 110px;
		font-size:larger;
	}
	.insert-type input {
		font-size: larger;
		text-align: center;
		position: relative;
		
	}
	form{
		position: relative;
		margin-right: 250px;
		top: 100px;
	}
</style>
<div class="insert-type">
	<form method="POST">
	<label>
		<h1><b>Loại</b></h1><br>
		<input type="text" name="name" required placeholder="Type">
		
	</label><br><br>
	<button type="submit" name="btn">Thêm Loại</button>
</form>
</div>
	
<?php
require_once("layout/footer.php");
?>