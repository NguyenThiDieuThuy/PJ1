<?php
$error="";
if(isset($_POST['btn'])){
	$user =$_POST['user'];
	$pass=md5($_POST['pass']);
	$sql="SELECT id,name FROM customers WHERE pass='$pass' AND (email='$user' OR phone='$user')";
	$result=mysqli_query($conn,$sql);
	if($result==false){
		$error=mysqli_error($conn);

	}
	else{
		if(mysqli_num_rows($result)==1){
			$row=mysqli_fetch_assoc($result);
			$_SESSION['user']['id']=$row['id'];
			$_SESSION['user']['name']=$row['name'];
			header("Location:index.php");


		}
		else{
			$error="Thông tin tài khoản không hợp lệ";
		}
	}
}

?>
<?php 
$tittle="Đăng nhập";
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
     <h2 style="color: yellow"><?php echo $error; ?></h2>
	<h1 style="text-align: center;position: relative;left: 50px; top:15px; color: #8a5ba3;  "> Đăng nhập Customer !</h1><br><br>
	
	<form method="POST">
	<input type="text" name="user" placeholder="Nhập Email or Phone:" required ><br><br>
	<input type="password" name="pass" placeholder="Nhập Password : " required ><br><br>
	<button  type="submit" name="btn">Đăng nhập</button><br><br>
	<a href="index.php?module=common&action=register">Đăng kí tài khoản tại đây</a>
</form>


<?php
 require_once("layout/footer.php");
 ?>
