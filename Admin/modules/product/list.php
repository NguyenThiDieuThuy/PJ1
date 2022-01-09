<?php
    $sql = "SELECT id,name,url,price,stt FROM products ";
     if(isset($_GET['keyword'])){
	$keyword= $_GET['keyword'];
	$sql.= "WHERE name LIKE '%$keyword%'";
}
		$rs="SELECT COUNT(`id`) AS 'tong_sp' FROM products";
		$kq=mysqli_query($conn,$rs);
        $row=mysqli_fetch_assoc($kq);
        $tong_sp = $row['tong_sp'];
        $limit = 7;
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

<?php
$tittle = "Quản lí sản phẩm";
require_once("layout/header.php");
?>
<style type="text/css">
	.list-product{
		padding: 16px;

	}
	.list-product table{
		width: 80%;
		position: relative;
		left: 90px;
		text-align: center;

	}
	.list-product tr,td,th{
		border: 2px solid black;

	}
	
 form{
 	text-align: center;
 	margin: auto;
 	position: relative;top: 100px;
 }
 input,button,select{
 	font-size: larger;
 	
 	margin-left: 60px;
 }
 button {
 	width: 80px;
 }
 table,tr,td,th{
 	border-collapse: collapse;
 	font-size: 20px;
 	
 	text-align: center;

 }
 table{
 	position: relative;
 	top: 100px;
 }
 input{
 	
		width: 270px;
		height: 30px;
		text-align: center;
		border-radius: 5px;
 }
</style>

<div class="list-product">
	<form method="GET">
		<input type="hidden" name="module" value="product">
		<input type="hidden" name="action" value="list">
		<input type="text" name="keyword" placeholder="Tìm kiếm sản phẩm" >
		
		<select name="origin">
			<option>--Chọn xuất xứ--</option>
			<option>Việt Nam</option>
			<option>China</option>
			<option>USA</option>
			<option>Japan</option>
			<option>Korea</option>
			<option>NewZeland</option>
			
		</select>
		<select name="type">
			<option>--Chọn loại--</option>
			<option>Hoa quả tươi</option>
			<option>Hoa quả sấy</option>
			<option>Giỏ quả</option>
			
		</select>
		<button type="submit"><i class="fa fa-search"></i></button>
	</form><br><br><br>
	<a href="index.php?module=product&action=insert">
	<h2><i style="color: gray"; class='fa fa-plus-circle'></i>
   Thêm sản phẩm</h2></a><br><br><br><br>
     
     
     
     <table>
		<tr>
			<th>ID</th>
			<th>Sản phẩm</th>
			<th>Giá</th>
			<th>Trạng thái</th>
			<th colspan="2">Hành động</th>
		</tr>
		<?php
		$total = mysqli_num_rows($result);
		  if(isset($keyword)) echo "<h2 style='color:red;'> Có tất cả $total kết quả tìm kiếm cho $keyword</h2>";
		  $count = 0;
		  $n=1;
		  while ($count != $total) {
		  	echo "<tr>";
		  	while ($row=mysqli_fetch_assoc($result)) {
		  		$count++;
		  		echo "<td >";
		  		
		  		$id= $row['id'];
		  		echo "<b>".$row['id']. "</b>";
		  		echo "</td>";
		  		
                   echo "<td>";
                   $url= $row['url'];
                     
		           echo "<img src='$url'width='100px'><br>"; 
		            echo "<b>".$row['name']."</b><br>"; 
                   echo "</td>";
					echo "<td>";
					echo "<b style='color:red'>".$row['price']."</b>";
					echo "</td>";
					echo "<td>";
		             $arrStatus= array(1=>"Còn hàng", 0=>"Hết hàng", 2=>"Hàng sắp về");
                       $stt= $row['stt'];
                    echo $arrStatus[$stt];
					echo "</td>";
					echo "<td>";
				     echo "<a href='index.php?module=product&action=edit&id=$id'><i class='fa fa-edit'></i>Sửa</a>";
					echo "</td>";
					echo "<td>";
					echo "<a href='index.php?module=product&action=delete&id=$id'><i class='fa fa-eraser'></i>Xóa</a>";
					echo "</td>";
					if($count % $n==0) break;

				
				}
				echo"</tr>";
			}
			     ?>
	</table>
	<a href="index.php?module=product&action=list&page=<?php echo ($page-1);?>"style=" margin-right:  250px; float: right;top: 115px; position: relative;">Previous</a>
     <span style="float: right; position: relative; left: 100px; top: 115px;"><?php echo " $page "; ?></span>
     
     <a href="index.php?module=product&action=list&page=<?php echo ($page+1);?>"style=" position: relative; left: 210px;  float: right; top: 115px;">Next</a>
     </div>
     <div style="height: 300px; border-top: 2px dotted gray;position: relative;top:165px;background-color: #92D918">
		<p style=" position: relative; font-size: 25px;margin-left: 10px;"><i class='fas fa-map-marker-alt' style='font-size:23px;color:red;margin-right: 10px;'></i>Địa chỉ liên hệ</p>
		<p style="position: relative;font-size: 25px;top: 20px;margin-left: 10px"><i class='fas fa-building' style='font-size:24px;margin-right: 10px;color: gray;'></i>A17 Tạ Quang Bửu , phường Bách khoa , quận Hai Bà Trưng , Hà Nội</p>
		<p style="position: relative;font-size: 22px;top: 40px;margin-left: 10px;"><i class="fa fa-phone" style="font-size:25px;margin-right: 10px;color: blue;"></i>SĐT:012345679</p>
	</div>
<?php
require_once("layout/footer.php");
?>