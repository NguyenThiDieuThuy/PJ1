<?php
$name=$email=$pass=$phone=$addr=$error="";

if(isset($_POST['btn'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=md5($_POST['pass']);
	$phone=$_POST['phone'];
	$addr=$_POST['addr'];
	$sql="INSERT INTO customers VALUES(null,'$name','$phone','$email','$addr','$pass')";
	$result=mysqli_query($conn,$sql);
	if($result==false){
		$error="loi".mysqli_error($conn);
	}
	else{
		
		header("Location:index.php?module=common&action=login");
	}
}
	?>
	<?php 
  $tittle="Đăng kí";
    require_once("layout/header.php");
    ?>
<style type="text/css">
   input{
   font-size: xx-large;
   text-align: center;
   border-radius: 5px;
   box-shadow: 5px 5px 5px red;
   }
   input:hover{
   	box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
	}
  
   form{
   	text-align: center;
   	position: relative;
   	left: 30px;

   }
   button{
   	font-size: xx-large;
   box-shadow: 10px 10px 5px skyblue;
   	 width: 350px;
   	 background-color: pink;

   }
   button:hover{
   	background-color: skyblue;
   	box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
		
		
   }
  
	
</style>

	<h1 style="text-align: center;position: relative;left: 30px; top:15px; color: #8a5ba3;  ">Đăng kí tài khoản</h1><br><br>
	<form method="POST">
		<input type="text" name="name" placeholder="Tên người dùng" required><br><br>
		<input type="email" name="email" placeholder="Nhập Email" required><br><br>
		<input type="tel" name="phone" placeholder="Nhập SĐT" required><br><br>
		<input type="text" name="addr" placeholder="Nhập địa chỉ " required><br><br>
		<input type="password" name="pass" placeholder="Nhập mật khẩu" required><br><br><br>
        <button style="font-size: xx-large; width: 350px;" type="submit" name="btn">Đăng kí </button>

	</form>

<?php
 require_once("layout/footer.php");
 ?>

