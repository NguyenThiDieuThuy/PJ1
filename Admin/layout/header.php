<?php
if(!isset($_SESSION['admin'])){
	header("Location:index.php?module=common&action=login");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<title><?php echo $tittle; ?></title>
	<meta charset="utf-8">
	<link rel="icon" href="../public/images/mushroom.svg.png" type="image/x-ico">
	<style type="text/css">
		*{
          padding: 0;
          margin: 0;
          box-sizing: border-box;

		}
		body{
			background-color: #92D918; /* Dành cho các trình duyệt không hỗ trợ gradient*/
  background-image: linear-gradient( #92D918, white); 

		}
		.container{
			width: 100%;
			min-height:150vh;
			margin: auto;
			background-color: #92D918; /* Dành cho các trình duyệt không hỗ trợ gradient*/
  background-image: linear-gradient( #92D918, white); 
         

		}
		.header{
			width: 100%;
			height: 13vh;
			line-height: 10vh;
			padding-left: 16px;
			padding-right: 16px;
			border-bottom: 1px dotted gray;
			
background-color: #92D918; /* Dành cho các trình duyệt không hỗ trợ gradient*/
  background-image: linear-gradient( #92D918, white); 

		}
		.main-menu{
			background-color: pink;
			height: 70vh;
			width: 100%;
			
			text-align: center;
			display: inline;

		}
		.content{
			width: 100%;
			height: 210vh;
			float: left;
			background-color: white;

		}
		.main-menu ul{
			list-style-type: none;
			background-color:#FCF599; 
			float: left;
			height: 60px;
			
			width: 100%;
			
			display: inline;
			margin: auto;
			position: relative;
			font-size: 30px;
			
		}
		.main-menu li{
			height: 100%;
			line-height: 70%;
			
			width:379.5px;
			display: inline-block;
			
			float: left;
			
			
		}
		.main-menu a{
			text-decoration: none;
			color: black;
			display: block;
			float: all;
			height: 50px;


		}
		
		.main-menu a:hover{

			background-color:#FACF9F;
			color: black;
			height: 60px;
			
			
		}
		#dau{
			width: 25%;
			height: 100%;
			
			
			position: relative;
			right: 16px;
			
		}
		#giua{
			width: 600px;
			height: 100px;
			position: relative;
			right: 19px;
		}
		
		
	</style>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
<div class="container">
	<div class="header">
		<a href="index.php?module=product&action=list"><img src="img/logo1.png"  alt="logo" id="dau"></a>
		<img src="../public/images/logo2.jpg" style="width: 55%;height: 99%;position: relative;">
		<a style="float: right;width: 6%;" href="index.php?module=common&action=logout"><h2>Logout</h2></a>
		<h2 style="float: right;" id="admin"><?php if(isset($_SESSION['admin'])) echo $_SESSION['admin']['name']; ?></h2>
	 </div>
	<div class="main-menu">
		<ul>
			<li>
			<a href="index.php?module=product&action=list"><p style="position: relative;top: 15px;">Quản lí sản phẩm</p> </a>
			
		    </li>
		    <li>
			<a href="index.php?module=invoices&action=list"><p style="position: relative;top: 15px;">Quản lí hóa đơn</p></a>
		    </li>
		    <li>
			<a href="index.php?module=origin&action=list"><p style="position: relative;top: 15px;">Quản lí nguồn gốc</p></a>
		    </li>
		    <li>
			<a href="index.php?module=type&action=list"><p style="position: relative;top: 15px;">Quản lí loại</p></a>
		    </li>
	    </ul>
		
	</div>
	<div class="content">
		