<?php
if(isset($_GET['id'])){
	$id =$_GET['id'];
	$sql = "SELECT * FROM products WHERE id='$id'";
	$result=mysqli_query($conn,$sql);
	 if($result == false){
		echo "Error".mysqli_error($conn);
	}
	else if(mysqli_num_rows($result)==0){
		echo "<h2>Không có thông tin sản phẩm </h2>";
	}
	else{
		$row=mysqli_fetch_assoc($result);
		$name =$row['name'];
		$description=$row['description'];
        $price=$row['price'];
        $stt=$row['stt'];
        $url=$row['url'];
        $id_origin=$row['id_origin'];
        $id_type=$row['id_type'];
	}

}

?>
<?php $tittle="Chi tiết sản phẩm";
require_once("layout/header.php");
?>
<style type="text/css">
	.details table{
		width: 100%;
		margin-top: 300px;
	

	}
	table ,tr, td, th{
		
		border-collapse: collapse;

	}
	#anh a:hover{
		box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
		width: 200px;
	}

	#anh{
		box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
		text-align: center;
		width: 300px;

	}
	#thongso{
		text-align: center;
		position: relative;
		bottom: 100px;
	}
	.themsp{
		box-shadow: 10px 10px 5px pink;

	}
	.themsp:hover{
		box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
		
		background-color: pink;
	}
	div{
		margin-right: 150px;
	}
    .chay{
 		background-color:#A4FF08; /* Dành cho các trình duyệt không hỗ trợ gradient*/
      background-image: linear-gradient(#A4FF08,  white,#F5A9F2,white); 
      bottom: 20px;
      position: relative;

	}
</style>
<div class="details">
	
	<table>
		
		<tr>
			
			<td id="anh"><a href="#"><img src="<?php echo $url ; ?>" width='400px' height='400px;'></a></td>
			
				
					
				<td id="thongso"><h3 style=" position: relative; left: 20px; font-size: 40px;"><?php echo $name ;?></h3><br>
					<div style="height: 5px;background-color: green; width: 50%;float: right;"></div><br>
				<p><b><i>Thông tin sản phẩm</i></b></p><br><br>
				<?php echo "Giá :".$price."VND";
                 ?> 
				 <br><br>
				<p>Đơn vị tính :   1kg</p>
                <br>
				<?php 
				 $sql="SELECT id, name FROM origin WHERE id='$id_origin'";
			   $result=mysqli_query($conn,$sql);
			   if($result==false){
				echo "error".mysqli_error($conn);
			 }
			 else{ 
				$row=mysqli_fetch_assoc($result);
				
				$name=$row['name'];
				$id_origin =$row['id'];
				 echo  "Xuất xứ:".$name;

				}
				 ?>

				 <br>
				 
				 
				 <br>
				 <?php 
				$sql="SELECT id, name FROM type WHERE id='$id_type'";
			$result=mysqli_query($conn,$sql);
			if($result==false){
				echo "error".mysqli_error($conn);
			}
			else{ 
				$row=mysqli_fetch_assoc($result);
				
				$name=$row['name'];
				$id_type =$row['id'];
				
					 echo  "Loại:".$name;

				}
				 ?><br>
				 <?php
				$arrStt =array(1=>"Còn hàng", 0=>"Hết hàng", 2=>"Hàng sắp về");
				echo $arrStt[$stt];
				
				 ?>

                 <div style="width: 50%;height: 5px;background-color: green;float: right;position: relative;top:30px;"></div>

				<br><br>
				
			    </td>

		</tr>
	</table>
	<p style="width: 50%;position: relative;top: 70px;"><?php echo "<b>Mô tả </b>: " .$description; ?></p>
	<div  class="chay" style=" position: relative;bottom: 600px; width: 300px;height: 500px;  float: right; left: 400px;border:solid 1px gray;">
	<div style="width:298px;height: 50px;background-color: skyblue;font-size: 35px;">Sản phẩm bán chạy</div>
	<div id="sp" style="width:300px;height: 50px; font-size: 35px;"><a href="index.php?module=details&action=details&id=7"><img  style="position: relative;top: 20px;margin-right: 10px; width: 80px;height: 80px;" src="../public/images/tao.jpg">Táo evy USA</a>  </div><br><br>
	<div id="sp" style="width:300px;height: 50px; font-size: 30px;"><a href="index.php?module=details&action=details&id=30"><img  style="position: relative;top: 20px;margin-right: 10px; width: 80px;height: 80px;" src="../public/images/vu-sua.jpg">Vú sữa Lò Rèn</a>  </div><br><br>
    <div id="sp" style="width:300px;height: 50px; font-size: 35px;"><a href="index.php?module=details&action=details&id=31"><img  style="position: relative;top: 20px;margin-right: 10px; width: 80px;height: 80px;" src="../public/images/manxoi.jpg">Mân xôi đỏ</a>  </div><br><br>
    <div id="sp" style="width:300px;height: 50px; font-size: 30px;"><a href="index.php?module=details&action=details&id=16"><img  style="position: relative;top: 20px;margin-right: 10px; width: 80px;height: 80px;" src="../public/images/măng-cụt.png">Măng cụt</a>  </div><br><br>
    <div id="sp" style="width:300px;height: 50px; font-size: 30px;"><a href="index.php?module=details&action=details&id=17"><img  style="position: relative;top: 20px;margin-right: 10px; width: 80px;height: 80px;" src="../public/images/chôm.jpg">Chôm Chôm</a>  </div>
</div>
    <?php 
    if($stt=1) {
    ?>
	<div class="themsp" style="width: 260px;height: 60px;font-size: 25px;float: right;position: relative;bottom: 120px;left:300px;">
	<a  style="text-decoration: none;" href="index.php?module=invoice&action=cart&id=<?php echo $id; ?>&up"> 
<i class='fas fa-cart-plus' style='font-size:48px;color:blue'
	></i>Thêm vào giỏ hàng</a></div> 
	<?php } ?>
<br><br>

	    <div style="height: 300px; border-top: 2px dotted gray;width: 1530px;background-color: lightgreen;top: 500px;position: relative;">
		<p style=" position: relative; top: 30px; font-size: 25px;margin-left: 10px;"><i class='fas fa-map-marker-alt' style='font-size:23px;color:red;margin-right: 10px;'></i>Địa chỉ liên hệ</p>
		<p style="position: relative;top: 50px;font-size: 25px;"><i class='fas fa-building' style='font-size:24px;margin-right: 10px;'></i>A17 Tạ Quang Bửu ,phường Bách khoa ,quận Hai Bà Trưng ,Hà Nội</p>
		<p style="position: relative;top:60px;font-size: 22px;"><i class="fa fa-phone" style="font-size:25px;margin-right: 10px;"></i>SĐT:012345679</p>
		<p style="float: left;font-size: 25px;position: relative;top: 80px;"><img src="../public/images/f.jpg" style="width: 30px;height: 30px;float: left;margin-right: 10px;">Fresh Fruits</p><br><br>
    <p style="float: left;font-size: 25px;position: relative;top: 100px;"><img src="../public/images/g.jpg" style="width: 30px;height: 30px;float: left;margin-right: 10px;">FreshFruits@gmail.com</p>
   
	</div>	
<?php
require_once("layout/footer.php");
?>