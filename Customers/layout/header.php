<?php
error_reporting(0);
?>
<!DOCTYPE html>

<html>
<head>
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
			 
		    background-color:  #92D918;
			background-image: linear-gradient( #92D918,white); 


            
		}
		.container{
			width: 100%;
			min-height: 250vh;
			margin: auto;
			background-color: white;
			


		}
		.header{
			width: 100%;
			height: 14vh;
			line-height: 10vh;
			padding-left: 16px;
			padding-right: 16px;
			border-bottom: 1.5px dotted gray;
			background-color:#92D918;
			background-image: linear-gradient( #92D918, white); 
			font-size: 20px;
			
 

		}
		
	    #dau{
	    	position: relative;
			right: 15px;
			height: 100%;
			width: 25%;
			
	    }
	    
		
		.active{
			background-color: pink;
			background-image: linear-gradient(  pink, white);
			color: white;
			
			width: 266px;
			color: blue;
		}
		.repair{
			
			left: 20px;
			width: 270px;
			float: right;
			height: 50%;
			position: relative;
			right: 100px;
			
		}
		.main-menu{
			width: 100%;
			height: 10%;
			position: relative;
		
			
		}

		.main-menu ul{
			list-style-type: none;
			padding: 0px;
			height: 60px;
			position: relative;
			float: left;
			width: 100%;
		
			
		}
		
		.main-menu li{
			float: left;
			width:379.5px;
			height: 100%;
			line-height: 50px;
			background-color: #8ab601;
			font-size: 30px;
		}
		.main-menu a{
			display: block;
			height: 100%;
			font-size: 25px;
			text-align: center;
			top: 15px;
			text-decoration: none;
			width: 100%;
		}
		.main-menu a:hover{
			background-color:#ffd968;
			background-image: linear-gradient(  to right ,#ffd968, white); 
		}
		li ul{
			display: none;
		}
		li:hover ul{
			display: block;
			z-index: 1;
		}
	

		 

		.hotline-phone-ring-wrap {
  position: fixed;
  bottom: 0;
  left: 0;
  z-index: 999999;
}
.hotline-phone-ring {
  position: relative;
  visibility: visible;
  background-color: transparent;
  width: 110px;
  height: 110px;
  cursor: pointer;
  z-index: 11;
  -webkit-backface-visibility: hidden;
  -webkit-transform: translateZ(0);
  transition: visibility .5s;
  left: 0;
  bottom: 0;
  display: block;
}
.hotline-phone-ring-circle {
	width: 85px;
  height: 85px;
  top: 10px;
  left: 10px;
  position: absolute;
  background-color: transparent;
  border-radius: 100%;
  border: 2px solid #e60808;
  -webkit-animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
  animation: phonering-alo-circle-anim 1.2s infinite ease-in-out;
  transition: all .5s;
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  opacity: 0.5;
}
.hotline-phone-ring-circle-fill {
	width: 55px;
  height: 55px;
  top: 25px;
  left: 25px;
  position: absolute;
  background-color: rgba(230, 8, 8, 0.7);
  border-radius: 100%;
  border: 2px solid transparent;
  -webkit-animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
  animation: phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
  transition: all .5s;
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
}
.hotline-phone-ring-img-circle {
	background-color: #e60808;
	width: 33px;
  height: 33px;
  top: 37px;
  left: 37px;
  position: absolute;
  background-size: 20px;
  border-radius: 100%;
  border: 2px solid transparent;
  -webkit-animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
  animation: phonering-alo-circle-img-anim 1s infinite ease-in-out;
  -webkit-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
}
.hotline-phone-ring-img-circle .pps-btn-img {
	display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
}
.hotline-phone-ring-img-circle .pps-btn-img img {
	width: 20px;
	height: 20px;
}
.hotline-bar {
  position: absolute;
  background: rgba(230, 8, 8, 0.75);
  height: 40px;
  width: 180px;
  line-height: 40px;
  border-radius: 3px;
  padding: 0 10px;
  background-size: 100%;
  cursor: pointer;
  transition: all 0.8s;
  -webkit-transition: all 0.8s;
  z-index: 9;
  box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.1);
  border-radius: 50px !important;
  /* width: 175px !important; */
  left: 33px;
  bottom: 37px;
}
.hotline-bar > a {
  color: #fff;
  text-decoration: none;
  font-size: 15px;
  font-weight: bold;
  text-indent: 50px;
  display: block;
  letter-spacing: 1px;
  line-height: 40px;
  font-family: Arial;
}
.hotline-bar > a:hover,
.hotline-bar > a:active {
  color: #fff;
}
@-webkit-keyframes phonering-alo-circle-anim {
  0% {
    -webkit-transform: rotate(0) scale(0.5) skew(1deg);
    -webkit-opacity: 0.1;
  }
  30% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    -webkit-opacity: 0.5;
  }
  100% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
    -webkit-opacity: 0.1;
  }
}
@-webkit-keyframes phonering-alo-circle-fill-anim {
  0% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    opacity: 0.6;
  }
  50% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
    opacity: 0.6;
  }
  100% {
    -webkit-transform: rotate(0) scale(0.7) skew(1deg);
    opacity: 0.6;
  }
}
@-webkit-keyframes phonering-alo-circle-img-anim {
  0% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
  }
  10% {
    -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
  }
  20% {
    -webkit-transform: rotate(25deg) scale(1) skew(1deg);
  }
  30% {
    -webkit-transform: rotate(-25deg) scale(1) skew(1deg);
  }
  40% {
    -webkit-transform: rotate(25deg) scale(1) skew(1deg);
  }
  50% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
  }
  100% {
    -webkit-transform: rotate(0) scale(1) skew(1deg);
  }
}
@media (max-width: 768px) {
  .hotline-bar {
    display: none;
  }
}

#cot{
	width: 20px;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins')
.wrapper{
	
	background-color: #fff;
	border-radius: 5px;
	border-top: 0px;
	border: 2px solid gray;
	z-index: 999999;

  
}





	</style>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	

</head>

<body>

		
	<div class="container">
		
		<div class="header" >

			<a href="index.php?module=home&action=home"><img src="img/logo1.png"  alt="logo" id="dau"></a>
			<label style="float: right;">
				<a href="index.php?module=invoice&action=cart" style="text-decoration: none;"><i style="font-size: 30px; color: #ff80bf;"class="fas fa-shopping-cart"></i>
			<b style="text-decoration: none;">Giỏ hàng</b>
			<?php 
			$q=0;
			if(isset($_SESSION['cart'])){
				foreach ($_SESSION['cart'] as $id_product => $quantity) {
					$q +=$quantity;
				}
			}
			echo "( $q )";
			?></a>
			</label>
			<div class="abc" style="float: right;">
						
					
			<?php
			if(isset($_SESSION['user'])){
				echo "<h2 style='float:left; margin-left:16px;'>".$_SESSION['user']['name']."</h2>"; 
				
				echo "<a href='index.php?module=common&action=logout' style='margin-left:30px;margin-right:16px;'>Đăng xuất</a>";
			}
				else{
					echo "<a href='index.php?module=common&action=login' style='margin-right:16px'>Đăng nhập</a>";
					echo "<h7 style='margin-right:16px'>||</h7>";
					echo "<a href='index.php?module=common&action=register'' style='margin-right:16px'>Đăng kí</a>";
				}

			
			?>
		

		</div>
			
		
		  
		</div>
		<div class="main-menu" style="width: 100%">
			
		<ul > 
			<li>
			<a class='<?php if ($action=="home") echo "active";?>'href="index.php?module=home&action=home"><i style='color: #ffa700;float: 3px;'class="fas fa-home"></i>Trang chủ </a>
		    </li>
		    <li >
			<a class='<?php if ($action=="product") echo "active";?>'href="index.php?module=product&action=product"></i>Sản phẩm<i class='fas fa-angle-down' style='position:relative;top: 8px ;left: 25px;font-size:25px;color:black;'></i></a>
			 <ul>
			 	<li class="repair">
			 		<a class='<?php if ($action=="fruits_in_country") echo "active";?>' href="index.php?module=fruits_in_country&action=fruits_in_country"><i class='fas fa-caret-right' style='float: left;position: relative;right: -10px;top: 15px;font-size:28px;color:blue;'></i>Hoa quả trong nước</a>
			 	</li>
			 	<li class="repair">
			 		<a  class='<?php if ($action=="imported_fruits") echo "active";?>'href="index.php?module=imported_fruits&action=imported_fruits"><i class='fas fa-caret-right' style='float: left;position: relative;right:-10px;top: 15px;font-size:28px;color:blue;'></i>Hoa quả nhập khẩu</a>
			 	</li>
			 	<li class="repair">
			 		<a class='<?php if ($action=="dried_fruits") echo "active";?>'href="index.php?module=dried_fruits&action=dried_fruits"><i class='fas fa-caret-right' style='float: left;position: relative;right:-10px;top: 15px;font-size:28px;color:blue;'></i>Hoa quả sấy</a>
			 	</li>
			 	<li class="repair">
			 		<a class='<?php if ($action=="fruits_basket") echo "active";?>' href="index.php?module=fruits_basket&action=fruits_basket"><i class='fas fa-caret-right' style='float: left;position: relative;right:-10px;top: 15px;font-size:28px;color:blue;'></i>Giỏ quả</a>
			 	</li>
			 </ul>
		    </li>
		   
		    <li >
			<a class='<?php if ($action=="news") echo "active";?>' href="index.php?module=news&action=news"><i class="fa fa-newspaper-o" style="font-size:33px;top:8px;position: relative;margin-right: 5px;"></i>Tin tức </a>
		    </li>
		    <li >
			<a class='<?php if ($action=="contact") echo "active";?>' href="index.php?module=contact&action=contact">Liên hệ<i style="font-size: 20px;position: relative;left: 15px;" class="fa fa-phone"></i></a>
		    </li>
	    </ul>
	
		
</div>
     <div class="hotline-phone-ring-wrap">
	<div class="hotline-phone-ring">
		<div class="hotline-phone-ring-circle"></div>
		<div class="hotline-phone-ring-circle-fill"></div>
		<div class="hotline-phone-ring-img-circle">
		<a href="tel:0123456789" class="pps-btn-img">
			<img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png" alt="Gọi điện thoại" width="50">
		</a>
		</div>
	</div>
	<div class="hotline-bar">
		<a href="tel:0123456789" style="width: 180px;">
			<span class="text-hotline">0123456789</span>
		</a>
	</div>
</div>
   <div class="numberMess" style="display: none;"></div>
  
		<div class="content">
			