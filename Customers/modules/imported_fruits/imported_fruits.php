<?php
$error="";
$sql= "SELECT id,name,url,price FROM products WHERE id_origin=31 or id_origin=32 or id_origin=33 or id_origin=34 or id_origin=35 ";
if(isset($_GET['keyword'])){
	$keyword=$_GET['keyword'];
	$sql.= " AND name LIKE '%$keyword%' ";
}
$rs="SELECT COUNT(`id`) AS 'tong_sp' FROM products";
		$kq=mysqli_query($conn,$rs);
        $row=mysqli_fetch_assoc($kq);
        $tong_sp = $row['tong_sp'];
        $limit = 9;
        $tong_so_trang= ceil($tong_sp/$limit);
        if(isset($_GET['page'])){
        	$page=$_GET['page'];

        }
        else{
        	$page =1;
        }
        if($page > $tong_so_trang){
        	$page =$tong_so_trang;
        }
        if($page < 1){
        	$page=1;
        }
        $offset=($page-1)*$limit;
        $sql=$sql."LIMIT $offset,$limit";
        $result = mysqli_query($conn,$sql);
     if($result == false){
	$error ="Error:".mysqli_error($conn);
	mysqli_close($conn);
	die();
}

?>
<style type="text/css">
	.list{
		padding: 16px;
		

	}
	
	.list table{
		width: 100%;
		position: relative;
		top: 50px;



	}
	.list table .item{
		padding: 16px;
		text-align: center;
		box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;


	}
	.list table .item:hover{
		box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
	}
	.list form{
			position: relative;
			bottom: 190px; 
			float: left;
			margin-left:500px; 
		}
	input{
		width: 270px;
		height: 30px;
		text-align: center;
		border-radius: 5px;
		position: relative;
		left: 39px;
		

	}
	button{
		width: 33.5px;
		height: 26.5px;
		margin-right: 300px;
		position: relative;
		border-radius:   0 4.5px 4.5px 0;
		background-color: white;
		border: none;
	}
	button:hover{
		background-color: gray;
	}
	td:hover{
		border: 2px solid orange;

	}
		
</style>
<?php
$tittle="Hoa quả nhập khẩu";
require_once("layout/header.php");
?>
<div class="list">
	<div style="background-color: lightgray;position: relative;top: 50px;width: 27%;font-size: 30px;height: 50px;">
	<p style="position: relative;top: 10px" ><a href="index.php?module=home&action=home">Trang chủ</a>//Hoa quả nhập khẩu</p></div>
	<form method="GET">
		<input type="hidden" name="module" value="imported_fruits">
		<input type="hidden" name="action" value="imported_fruits">
		<input type="text" name="keyword" placeholder="Bạn cần tìm gì ?">
		<button type="submit"><i class="fa fa-search"></i></button>
	</form>
	<table>
		<?php
		$total = mysqli_num_rows($result);
		  if(isset($keyword)) echo "<h2 style='color:red;'> Có tất cả $total kết quả tìm kiếm cho $keyword</h2>";
		  $count = 0;
		  $n=3 ;
		  while ($count != $total) {
		  	echo "<tr>";
		  	while ($row=mysqli_fetch_assoc($result)) {
		  		$count++;
		  		echo "<td class='item'>";
		  		$url= $row['url'];
		  		$id= $row['id'];
		  		echo "<a href='index.php?module=details&action=details&id=$id'>";
		  		echo "<img src='$url'width='300px'>";
		  		echo "</a><br>";
		  		echo "<b>".$row['name']."</b><br>";
		  		echo "<b style='color:red'>".$row['price']."</b>";
		  		echo "</td>";
		  		if($count % $n==0) break;
		  	}
		  	echo "</tr>";
		  }
		?>
	</table>
     <a href="index.php?module=imported_fruits&action=imported_fruits&page=<?php echo ($page-1);?>" style=" margin-left: 650px; float: right;top: 100px; position: relative; right: 300px;">Previous</a>
     <span style="float: right; position: relative; left: 500px; top: 100px;"><?php echo " $page "; ?></span>
     
     <a href="index.php?module=imported_fruits&action=imported_fruits=<?php echo ($page+1);?>"style=" position: relative; left: 620px;  float: right; top: 100px;">Next</a>

	</div>
	<div style="height: 300px;border-top: 2px  gray dotted;position: relative;top: 170px;background-color:#92D918; ">
		 <iframe style="width: 300px;height: 260px;float: right;margin-right: 20px;position: relative;top: 10px;margin-left: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.729950478349!2d105.84560164960224!3d21.00345948594338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe0dd0b2919d48ce9!2zSOG7jWMgdmnhu4duIENOVFQgQsOhY2ggS2hvYQ!5e0!3m2!1svi!2s!4v1615620222712!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		<p style=" position: relative;  font-size: 25px;float: left;"><i class='fas fa-map-marker-alt' style='font-size:23px;color:red;margin-right: 10px;'></i>Địa chỉ liên hệ</p>
    <p style="position: relative;font-size: 25px;float: left;bottom: 200px;"><i class='fas fa-building' style='font-size:24px;margin-right: 10px;'></i>A17 Tạ Quang Bửu , phường Bách khoa , quận Hai Bà Trưng , Hà Nội</p>
    <p style="position: relative;font-size: 22px;float: left;bottom: 140px;right: 730px;"><i class="fa fa-phone" style="font-size:25px;margin-right: 10px;"></i>SĐT:012345679</p><br> 
    <p style="float: left;font-size: 25px;position: relative;bottom: 100px;right: 910px;"><img src="../public/images/f.jpg" style="width: 30px;height: 30px;float: left;margin-right: 10px;">Fresh Fruits</p>
    <p style="float: left;font-size: 25px;position: relative;bottom: 100px;right: 730px;"><img src="../public/images/g.jpg" style="width: 30px;height: 30px;float: left;margin-right: 10px;">FreshFruits@gmail.com</p>
	</div>
<?php
require_once("layout/footer.php");
?>