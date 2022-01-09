<?php
$error="";
if(isset($_POST['btn'])){
	$email =$_POST['email'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$pass=md5($_POST['pass']);
	$sql="SELECT id,name FROM admin WHERE pass='$pass' AND email='$email'";
	$result=mysqli_query($conn,$sql);
	if($result==false){
		$error=mysqli_error($conn);

	}
	else{
		if(mysqli_num_rows($result)==1){
			$row=mysqli_fetch_assoc($result);
			$_SESSION['admin']['id']=$row['id'];
			$_SESSION['admin']['pass']=$row['pass'];
			$_SESSION['admin']['name']=$row['name'];
			header("Location:index.php?module=product&action=list");


		}
		else{
			$error="Thông tin tài khoản không hợp lệ";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta charset="utf-8">
	<style type="text/css">
		#dau{
			text-align: center;
		

		}
		.giua{
			text-align: center;
		}
		.tong{
			background: width
		}
		.giua input{
			text-align: center;
			font-size: xx-large;
			border-radius: 10px;
			box-shadow: 5px 5px 5px red;
		}
		.giua input : hover{
         box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
		}
		button{
			font-size: xx-large;
			background-color: skyblue;
			box-shadow: 10px 10px 5px pink;
		}
		button:hover{
			box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
		
		background-color: pink;

		}
		.test {
   position: relative;
    height: 50px;
    font-size: 50px;
    font-weight:bold;
    width:100%;
   -webkit-animation: my 700ms infinite;
   -moz-animation: my 700ms infinite;
   -o-animation: my 700ms infinite;
   animation: my 700ms infinite;
   position: relative;

}

@keyframes my {
0% { color: #F8CD0A; }
50% { color: #fff; }
100% { color: #F8CD0A; }
}
body{


}
	
	</style>

	
</head>

<body style="background: url('img/77237.jpg');">
	<div class="tong">
	<div id="dau">
	<p class="test"> Đăng nhập Admin !</p></div>
	<h2 style="color: yellow"><?php echo $error; ?></h2>
  
	<form method="POST" >
		<fieldset style="width: 30%; margin: auto; background-color: white;height:50%;border-radius: 5px;" >
		
			<div class="giua"><br><br><br><input type="text" name="name" placeholder="Điền tên đăng nhập:" required><br><br><br>
			<input type="text" name="phone" placeholder="Nhập số điện thoại:" required><br><br><br>
	        <input  type="email" name="email" placeholder="Nhập Email:" required><br><br><br>
	        <input type="password" name="pass" placeholder="Nhập Password : " required><br><br><Br>
	        <button type="submit" name="btn">Đăng nhập</button><br><br></div>
	</fieldset>
</form>
</div>


</body>
</html>