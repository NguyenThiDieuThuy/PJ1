<?php
if(!isset($_GET['id'])){
	header("Location:index.php");
	die();
}
$id_invoice=$_GET['id'];
$sql="SELECT products.name,products.url,products.price,invoice_detail.quantity FROM products INNER JOIN invoice_detail ON invoice_detail.id_product = products.id WHERE invoice_detail.id_invoice='$id_invoice'";
$result =mysqli_query($conn,$sql);
if($result==false){
	die("error".mysqli_error($conn));
}

?>
<style type="text/css">
	table, tr, td, th{
		border: 1px solid black;
		border-collapse: collapse;
	}
	table{
		width: 90%;
		text-align: center;
		background-color:#F2F5A9;
	}
	tr:nth-child(even){
		background-color: pink;

	}
	tr:hover {
		background-color: skyblue;

	}
</style>
<?php
$tittle="Hóa đơn chi tiết";
require_once("layout/header.php");
?>
<div>
	<h2>Hóa đơn chi tiết#<?php echo $id_invoice ?></h2>
	<table>
		<tr>
		<th>STT</th>
		<th>Sản phẩm</th>
		<th>Giá</th>
		<th> Số lượng</th>
	</tr>
	<?php
	if(mysqli_num_rows($result)==0){
		echo "<h2>Hóa đơn trống</h2>";
	}
	else{
		$count =0;
		foreach ($result as $row) {
			echo "<tr>";
			$count ++;
			echo "<td>$count</td>";
			echo "<td>";
			  echo $row['name']."<br>";
			  $url =$row['url'];
			  echo "<img src='$url' style='width:100px'>";
			  echo "</td>";
			  echo "<td>".$row['price']."</td>";
			  echo "<td>".$row['quantity']."</td>";
			  echo "</tr>";
		}
	}
	?>
	</table>
</div>
<?php
require_once("layout/footer.php");
?>