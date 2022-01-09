<style type="text/css">
	.icon{
		text-align: center;
		position: relative;
		bottom :80px;
    width: 100%;
        
	}
	.anh{
    width: 125px;
    height: 125px;
    background: #98E30E;
    -moz-border-radius: 62.5px;
    -webkit-border-radius:62.5px;
    --border-radius: 62.5px;
    border-radius: 62.5px;
    position: relative;
    top: 70px;
    float: right;
    margin-left: 30px;

}
#Slider{
    width: 100%;
    height: 50%;
}
button{
    position: relative;
    bottom: 250px;
}
#right{
    position: relative;
   
    float: right;
}

    
    .qua{
    position: relative;
  
    box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;
    
}
    .qua:hover{
      border:3px solid orange;
        background-color: lightyellow ;
        box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
    }
    #btn:hover{
        background-color: white;


    }
    a{
        text-decoration: none;
    }
    .sp{
         position: relative;
    
    bottom: 950px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px;

    }
    .sp:hover{
      border:3px solid orange;
         background-color: lightyellow ;
        box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;

    }
    .mySlides {
    display: none;
}
/* Định dạng nội dung Caption */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
/* định dạng các chấm chuyển đổi các slide */
.dot {
  cursor:pointer;
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
/* khi được hover, active đổi màu nền */
.active, .dot:hover {
  background-color: #717171;
} 
/* Thêm hiệu ứng khi chuyển đổi các slide */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3s;
  animation-name: fade;
  animation-duration: 3s;
}
 @-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
 
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
.sp i:hover{
   color: blue;
}
.danhmuc{
  
  height: 50px;
  width: 50%;
  margin-left: 300px;
}
.b1{
  border-radius: 5px ;
  border:3px gray dashed;
  
  margin-left: 10px;
  bottom: 200px;
  color: green;
  margin: auto;

}
.class{
  width: 100%;
    position: relative;
  bottom: 1500px;
    
}

.id{
  position: relative;
  bottom: 1200px;
 box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px; 
}
.id:hover{
  box-shadow:
                0 0 10px 4px #FF6347,
                0 0 10px 20px  #ffbf80,
                20px 0 10px 10px #80ff80;
}
.a1{
  text-align: center;
  margin-left: 100px;
}
.the{

  border-top:3px solid orange;
  position: relative;
 bottom: 8px;
}
.icon1{
  width: 95px;
    height: 95px;
    background:  #92D918;
    -moz-border-radius: 50.5px;
    -webkit-border-radius:50.5px;
    --border-radius: 50.5px;
    border-radius: 50.5px;
}
.icon2{
  width: 115px;
    height: 115px;
    background:  white;
    -moz-border-radius: 60.5px;
    -webkit-border-radius:60.5px;
    --border-radius: 60.5px;
    border-radius: 60.5px;
    border:3px solid gray;
    position: relative;
   

}

#cv:hover{
  border:3px solid orange;

}
#picture{
  position: relative;
  
  box-shadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.04) 0px 10px 10px -5px; 
}
#picture:hover{
  box-shadow:
             0 0 10px 4px #FF6347;
}

.news:hover{
  border:3px  dashed orange;
}
.test {
position: relative;
height: 50px;

font-weight:bold;
width:100%;
-webkit-animation: my 700ms infinite;
-moz-animation: my 700ms infinite;
-o-animation: my 700ms infinite;
animation: my 700ms infinite;
position: relative;
top: 230px;
}

@keyframes my {
0% { color: #F8CD0A; }
50% { color: #fff; }
100% { color: #F8CD0A; }
}
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .6s ease;
  backface-visibility: hidden;
}
 
.readmore {
  transition: .6s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
 
.qua:hover .image {
  opacity: 0.5;
}
 
.qua:hover .readmore {
  opacity: 1;
}
 
#text {
  
  color: white;
  font-size: 18px;
  padding: 60px 60px;
  font-weight: bold;
}
.image1{
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .6s ease;
  backface-visibility: hidden;
}
 

 
.qua:hover .image1 {
  opacity: 0.5;
}
 

 

.image2{
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .6s ease;
  backface-visibility: hidden;
}
 

 
.qua:hover .image2 {
  opacity: 0.5;
}
 


.image3{
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .6s ease;
  backface-visibility: hidden;
}
.qua:hover .image3 {
  opacity: 0.5;
}
.image4{
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .6s ease;
  backface-visibility: hidden;
}
.qua:hover .image4 {
  opacity: 0.5;
}
.image5 {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .6s ease;
  backface-visibility: hidden;
}
 

 
.sp:hover .image5 {
  opacity: 0.5;
}
 
.sp:hover .readmore {
  opacity: 1;
}
.image6 {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .6s ease;
  backface-visibility: hidden;
}
 

 
.sp:hover .image6 {
  opacity: 0.5;
}
.image7 {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .6s ease;
  backface-visibility: hidden;
}
 

 
.sp:hover .image7 {
  opacity: 0.5;
}
.image8 {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .6s ease;
  backface-visibility: hidden;
}
 

 
.sp:hover .image8 {
  opacity: 0.5;
}
.image9 {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .6s ease;
  backface-visibility: hidden;
}
 

 
.sp:hover .image9 {
  opacity: 0.5;
}


 </style>



<?php
$tittle="Fresh Fruits";
require_once("layout/header.php");
?>
<div style="width: 100%;height: 75%;position: relative;top: 50px;" class="mySlides fade">
    <img style="width: 100%;height: 75%" src="img/1.jpg">
</div>
 <div style="width: 100%;height: 75%;position: relative;top: 50px;" class="mySlides fade">
    <img src="img/2.jpg" style="width:100%;height: 75%;">
  </div>
 <div style="width: 100%;height: 75%;position: relative;top: 50px;" class="mySlides fade">
    <img src="img/3.jpg" style="width:100%;height: 75%;">
  </div>
  <div style="width: 100%;height: 75%;position: relative;top: 50px;" class="mySlides fade">
    <img src="img/v.jpg" style="width:100%;height: 75%;">
  </div>
 <div style="text-align:center;position: relative;bottom: 50px;">
  <span class="dot" onclick="currentSlide(0)"></span> 
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<script type="text/javascript">
    
  //khai báo biến slideIndex đại diện cho slide hiện tại
  var slideIndex;
  // KHai bào hàm hiển thị slide
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
 
      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
      //chuyển đến slide tiếp theo
      slideIndex++;
      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      }    
      //tự động chuyển đổi slide sau 5s
      setTimeout(showSlides, 5000);
  }
  //mặc định hiển thị slide đầu tiên 
  showSlides(slideIndex = 0);
 
 
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

</script>
         
<div class="icon">
	<div class ="anh" style="position: relative;float: left;margin-left: 200px;
	 text-align: center;"><i  class='fas fa-seedling' style='font-size:88px;color:green;margin-right: 70px;position: relative; top: 20px; text-align: center; margin: auto;'></i><br><br><br><br><b style="font-size: 20px;width: 300px;">NGUỒN GỐC</b><p style="font-size: 20px;width: 175px;height: 80px">Cam kết hàng hoá quả sạch có nguồn gốc xuất xứ thương hiệu nổi tiếng ở Việt Nam và nước ngoài.</p></div>

  	<div class ="anh"  style="position: relative;float: left;margin-left: 200px; text-align: center;"> <i class='fas fa-spa' style=' font-size:88px;color:green;margin-right: 90px; position: relative;top: 20px;text-align: center;left: 10px;'></i><br><br><br><br><b style="font-size: 20px;">TƯƠI NGON</b><p style="font-size: 20px;width: 175px;height: 75px;">Hoa quả sạch luôn tươi ngon và được bảo quản sạch sẽ, không dùng hóa chất bảo quản.</p></div>
  	<div class ="anh" style="position: relative;float: left;margin-left: 200px;text-align: center;"><i  class='fas fa-balance-scale'style='font-size:84px;color:green;margin-right: 90px;position: relative;text-align: center;left: 8px;top: 20px;' ></i><br><br><br><br><b style="font-size: 20px;">TRỌNG LƯỢNG</b><p style="font-size: 20px;width: 175px;height: 75px;">Cam kết trọng lượng đúng như Quý khách yêu cầu chính xác đến từng Gram.</p></div>
    <div class ="anh"style="position: relative;float: left;margin-left: 200px;text-align: center;"><i  class='fas fa-truck' style='font-size:82px;color:green;margin-right: 90px;position: relative;text-align: center;top: 20px;left: 18px;'></i><br><br><br><br><b style="font-size: 20px;">VẬN CHUYỂN</b><p style="font-size: 20px;width: 175px;height: 75px;">Miễn phí vận chuyển nội thành cho các đơn hàng trị giá từ 1 triệu đồng.</p></div>
</div>

    <div style="position: relative;top: 190px; font-size: 40px; color: green;width: 50%;margin-left: 300px;font-family:Comic Sans MS;"><p style="text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px skyblue;"><marquee><img src="../public/images/berry.jpg" style="width: 50px;position: relative;top: 11px;">Sản phẩm được ưa chuộng hàng đầu<img src="../public/images/berry.jpg" style="width: 50px;position: relative;top: 11px;"></marquee></p></div> 
   
 <div class="start" style="position: relative;bottom: 350px;">
     <div class="qua" style="position: relative;width: 250px;height: 350;
     margin-left: 40px;top: 620px;">
     <a style="position: relative;font-size: 35px;" href="index.php?module=details&action=details&id=24">
        <img style="position: relative;width: 244;height: 198px;margin-left: 1.5px; " src="../public/images/khoai.jpg" class="image">
        
        <div class="the" style="position: relative;bottom: 4px;"></div>
         <p style="position: relative;text-align: center;top: 50px;">Khoai lang sấy</p>
         <br><br><br><p style="position: relative;text-align: center; color: red;font-size: 20px;bottom: 60px;"> 
            <?php
            $sql="SELECT id, price FROM products WHERE id=24";
            $result=mysqli_query($conn,$sql);
            if($result==false){
                echo "error".mysqli_error($conn);
            }
            else{ 
                $row=mysqli_fetch_assoc($result);
                
                $price=$row['price'];
                $id=$row['id'];
                
                     echo  "Giá:".$price."VND";

                }
                ?></p></a>
                <div class="readmore">
                <a class="cd" href="index.php?module=invoice&action=cart&id=24" id="text"><div class="ab" style="position: relative;bottom: 5px; "><i class='fas fa-shopping-cart' style='font-size:48px;color:blue;float: left;'></i></div></a>
                <a  class="cd" href="index.php?module=details&action=details&id=24" id="text"><div  class="ab" style="float: right;position: relative;bottom: 23px;"><i class="fa fa-plus" style="font-size:48px;color:blue"></i></div></a></div>
     </div>
     <div class="qua" style="position: relative;width: 250px;height: 350;top: 270px;margin-left: 335px;">
        <a style="position: relative;font-size: 35px;" href="index.php?module=details&action=details&id=48">
        <img style="position: relative;width: 245;height: 200px;" src="../public/images/kiwi.jpg" class="image1">
        <div class="the" style="position: relative;"></div>
         <p style="position: relative;text-align: center;top: 40px;">Kiwi sấy</p>
         <br><br><br><p style="position: relative;text-align: center; color: red;font-size: 20px;bottom: 60px;"> 
            <?php
            $sql="SELECT id, price FROM products WHERE id=48";
            $result=mysqli_query($conn,$sql);
            if($result==false){
                echo "error".mysqli_error($conn);
            }
            else{ 
                $row=mysqli_fetch_assoc($result);
                
                $price=$row['price'];
                $id=$row['id'];
                
                     echo  "Giá:".$price."VND";

                }
                ?></p></a>
                 <div class="readmore">
                <a class="cd" href="index.php?module=invoice&action=cart&id=48" id='text'><div class="ab" style="position: relative; bottom:10px;"><i class='fas fa-shopping-cart' style='font-size:48px;color:blue;float: left;'></i></div></a>
                <a  class="cd" href="index.php?module=details&action=details&id=48" id='text'><div  class="ab" style="float: right;position: relative;bottom: 25px;"><i class="fa fa-plus" style="font-size:48px;color:blue"></i></div></a></div>
     </div>
<div class="qua" style="position: relative;bottom:80px;width: 250px;height: 350;margin-left: 630px;">
        <a style="position: relative;font-size: 35px;" href="index.php?module=details&action=details&id=25">
        <img style="position: relative;width: 245;height: 200px; top: 1px;" src="../public/images/chuoi.jpg" class="image2">
         <div class="the" style="position: relative;bottom: 7px;"></div>
         <p style="position: relative;text-align: center;top: 40px;">Chuối sấy dẻo</p>

         <br><br><br><p style="position: relative;text-align: center; color: red;font-size: 20px;bottom: 70px;"> 
            <?php
            $sql="SELECT id, price FROM products WHERE id=25";
            $result=mysqli_query($conn,$sql);
            if($result==false){
                echo "error".mysqli_error($conn);
            }
            else{ 
                $row=mysqli_fetch_assoc($result);
                
                $price=$row['price'];
                $id=$row['id'];
                
                     echo  "Giá:".$price."VND";

                }
                ?></p></a>
                <div class="readmore">
                <a class="cd" href="index.php?module=invoice&action=cart&id=25" id="text"><div class="ab" style="position: relative;float: left;"><i class='fas fa-shopping-cart' style='font-size:48px;color:blue'></i></div></a>
                <a  class="cd" href="index.php?module=details&action=details&id=25" id="text"><div  class="ab" style="float: right;position: relative;bottom: 18px;"><i class="fa fa-plus" style="font-size:48px;color:blue"></i></div></a> </div>
     </div>
     <div class="qua" style="position: relative;width: 250px;height: 350;bottom:430px;margin-left: 920px;float: left;" id="cv">
       <a style="position: relative;font-size: 35px;" href="index.php?module=details&action=details&id=27">
        <img style="position: relative;width: 245;height: 200px; " src="../public/images/mit.jpg" class="image3">
         <div class="the" style="position: relative;bottom: 7px;"></div>
         <p style="position: relative;text-align:center;top: 40px;">Mít sấy Đà Lạt</p>
         <br><br><br><p style="position: relative;text-align: center; color: red;font-size: 20px;bottom: 70px;"> 
            <?php
            $sql="SELECT id, price FROM products WHERE id=27";
            $result=mysqli_query($conn,$sql);
            if($result==false){
                echo "error".mysqli_error($conn);
            }
            else{ 
                $row=mysqli_fetch_assoc($result);
                
                $price=$row['price'];
                $id=$row['id'];
                
                     echo  "Giá:".$price."VND";

                }
                ?></p></a>
                <div class="readmore">
                <a class="cd" href="index.php?module=invoice&action=cart&id=27" id="text"><div class="ab" style="position: relative;float: left;"><i class='fas fa-shopping-cart' style='font-size:48px;color:blue'></i></div></a>
                <a  class="cd" href="index.php?module=details&action=details&id=27" id="text"><div  class="ab" style="float: right;position: relative;bottom:18px;"><i class="fa fa-plus" style="font-size:48px;color:blue"></i></div></a></div>
     </div>
     <div class="qua" style="position: relative;width: 250px;height: 350;bottom:430px;margin-right: 5px;float: left;margin-left: 40px;" id="cv">
       <a style="position: relative;font-size: 35px;" href="index.php?module=details&action=details&id=47">
        <img style="position: relative;width: 245;height: 200px; " src="../public/images/Vai-thieu.jpg " class="image4">
         <div class="the" style="position: relative;bottom: 10px;"></div>
         <p style="position: relative;text-align:center;top: 40px;">Vải sấy</p>
         <br><br><br><p style="position: relative;text-align: center; color: red;font-size: 20px;bottom: 70px;"> 
            <?php
            $sql="SELECT id, price FROM products WHERE id=47";
            $result=mysqli_query($conn,$sql);
            if($result==false){
                echo "error".mysqli_error($conn);
            }
            else{ 
                $row=mysqli_fetch_assoc($result);
                
                $price=$row['price'];
                $id=$row['id'];
                
                     echo  "Giá:".$price."VND";

                }
                ?></p></a>
                <div class="readmore">
                <a class="cd" href="index.php?module=invoice&action=cart&id=47"><div class="ab" style="position: relative; float:left;top:15px;right:  90px;" id="text"><i class='fas fa-shopping-cart' style='font-size:48px;color:blue'></i></div></a>
                <a  class="cd" href="index.php?module=details&action=details&id=47" id="text"><div  class="ab" style="position: relative;float:right;bottom: 90px;left: 30px;"><i class="fa fa-plus" style="font-size:48px;color:blue"></i></div></a> </div>
     </div>
     
 </div> 
 <div style="position: relative;top: 200px; ">

   <div class="sp" style="position: relative;width: 250px;height: 350;margin-left:40px;float: left;top: ">
        <a href="index.php?module=details&action=details&id=7">
            <img style=" position: relative;  width: 245px;height: 200px;" src="../public/images/tao.jpg" class="image9">
              <div class="the" style="height: 3px;width: 100%;"></div>
          
             <p style="position: relative;font-size: 35px;top: 40px; text-align: center;">Táo Evy</p>
        
        <br><br><br><p style="position: relative;text-align: center; color: red;font-size: 20px;bottom: 1px;"> 
            <?php
            $sql="SELECT id, price FROM products WHERE id=7";
            $result=mysqli_query($conn,$sql);
            if($result==false){
                echo "error".mysqli_error($conn);
            }
            else{ 
                $row=mysqli_fetch_assoc($result);
                
                $price=$row['price'];
                $id=$row['id'];
                
                     echo  "Giá:".$price."VND";

                }
                ?></p></a>
                <div class="readmore">
                <a class="cd" href="index.php?module=invoice&action=cart&id=7"><div class="ab" style="position: relative;top: 72px;margin-right: 180px;" id="text"><i class='fas fa-shopping-cart' style='font-size:48px;color:blue;'></i></div></a>
                <a  class="cd" href="index.php?module=details&action=details&id=7"><div  class="ab" style="float: right;position: relative;bottom: 92px;" id="text"><i class="fa fa-plus" style="font-size:48px;color:blue"></i></div></a> </div>

     </div>
     <div class="sp" style="position: relative;width: 250px;height: 350;margin-right: 647px;float: right;bottom:950px;">
        <a href="index.php?module=details&action=details&id=17">
            <img  style="position: relative;width: 245px; height: 200px;" src="../public/images/chôm.jpg" class="image8">
             <div class="the" style="height: 3px;width: 100%;"></div>
          
            <p style="position: relative;font-size: 35px;top: 40px; text-align: center;">Chôm Chôm</p>
            <br><br><br><p style="position: relative;text-align: center; color: red;font-size: 20px;bottom: 1px;"> 
            <?php
            $sql="SELECT id, price FROM products WHERE id=17";
            $result=mysqli_query($conn,$sql);
            if($result==false){
                echo "error".mysqli_error($conn);
            }
            else{ 
                $row=mysqli_fetch_assoc($result);
                
                $price=$row['price'];
                $id=$row['id'];
                
                     echo  "Giá:".$price."VND";

                }
                ?></p></a>
                <div class="readmore">
                <a class="cd" href="index.php?module=invoice&action=cart&id=17"><div class="ab" style="position: relative;top: 75px;float: left;margin-right: 180px;" id="text"><i class='fas fa-shopping-cart' style='font-size:48px;color:blue'></i></div></a>
                <a  class="cd" href="index.php?module=details&action=details&id=17"><div  class="ab" style="float: right;position: relative;bottom: 88px;" id="text"><i class="fa fa-plus" style="font-size:48px;color:blue"></i></div></a> </div>
         
     </div>
     <div class="sp" style="position: relative;width: 250px;height: 350;margin-left: 40px;float: left;bottom:950px;">
        <a href="index.php?module=details&action=details&id=30">
         
            <img  style="position: relative;width: 245px;height: 200px; " src="../public/images/vu-sua.jpg" class="image7">
            
            <div class="the" style="height: 3px;width: 100%;"></div>
          
             <p style="position: relative;font-size: 35px; top: 40px; text-align: center;">Vú sữa Lò Rèn</p>
             <br><br><br><p style="position: relative;text-align: center; color: red;font-size: 20px;bottom: 1px;"> 
            <?php
            $sql="SELECT id, price FROM products WHERE id=30";
            $result=mysqli_query($conn,$sql);
            if($result==false){
                echo "error".mysqli_error($conn);
            }
            else{ 
                $row=mysqli_fetch_assoc($result);
                
                $price=$row['price'];
                $id=$row['id'];
                
                     echo  "Giá:".$price."VND";

                }
                ?></p>
        </a>   <div class="readmore">
               <a class="cd" href="index.php?module=invoice&action=cart&id=30"><div class="ab" style="position: relative;top: 78px;margin-right: 180px;" id="text"><i class='fas fa-shopping-cart' style='font-size:48px;color:blue'></i></div></a>
                <a  class="cd" href="index.php?module=details&action=details&id=30"><div  class="ab" style="float: right;position: relative;bottom: 92px;" id="text"><i class="fa fa-plus" style="font-size:48px;color:blue"></i></div></a> </div>
        
         
     </div>
     <div class="sp" style="position: relative;width: 250px;height: 350;margin-left: 915px;bottom: 595px;">
        <a href="index.php?module=details&action=details&id=8">
         
            <img  style="position: relative;width: 245px;height: 200px; bottom: 696px;" src="../public/images/thanhlong.jpg" class="image6">
             <div class="the" style="height: 3px;width: 100%;position: relative;bottom: 709px;"></div>
          
          
             <p style="position: relative;font-size: 35px; bottom: 680px; text-align: center;">Thanh long </p>
             <br><br><br><p style="position: relative;text-align: center; color: red;font-size: 20px;bottom: 710px;"> 
            <?php
            $sql="SELECT id, price FROM products WHERE id=8";
            $result=mysqli_query($conn,$sql);
            if($result==false){
                echo "error".mysqli_error($conn);
            }
            else{ 
                $row=mysqli_fetch_assoc($result);
                
                $price=$row['price'];
                $id=$row['id'];
                
                     echo  "Giá:".$price."VND";

                }
                ?></p>
        </a>
                <div class="readmore">
                <a class="cd" href="index.php?module=invoice&action=cart&id=8"><div class="ab" style="position: relative;top: 75px;float: left;margin-right: 180px;" id="text"><i class='fas fa-shopping-cart' style='font-size:48px;color:blue'></i></div></a>
                <a  class="cd" href="index.php?module=details&action=details&id=8"><div  class="ab" style="float: right;position: relative;bottom:95px;" id="text"><i class="fa fa-plus" style="font-size:48px;color:blue"></i></div></a> </div>
      </div>
      <div class="sp" style="position: relative;width: 250px;height: 350;margin-left: 1210px;bottom: 946px;">
        <a href="index.php?module=details&action=details&id=44">
         
            <img  style="position: relative;width: 245px;height: 200px; bottom: 348px;" src="../public/images/upload_579f5f98bff841cf9ced466837d143d7.png" class="image5">
             <div class="the" style="height: 3px;width: 100%;position: relative;bottom: 355px;"></div>
          
          
             <p style="position: relative;font-size: 35px; bottom: 310px; text-align: center;"> Dừa xiêm </p>
             <br><br><br><p style="position: relative;text-align: center; color: red;font-size: 20px;bottom: 355px;"> 
            <?php
            $sql="SELECT id, price FROM products WHERE id=44";
            $result=mysqli_query($conn,$sql);
            if($result==false){
                echo "error".mysqli_error($conn);
            }
            else{ 
                $row=mysqli_fetch_assoc($result);
                
                $price=$row['price'];
                $id=$row['id'];
                
                     echo  "Giá:".$price."VND";

                }
                ?></p>
        </a>
                <div class="readmore">
                <a class="cd" href="index.php?module=invoice&action=cart&id=44"><div class="ab" style="position: relative;top: 80px;float: left;margin-right: 180px;" id="text"><i class='fas fa-shopping-cart' style='font-size:48px;color:blue'></i></div></a>
                <a  class="cd" href="index.php?module=details&action=details&id=44"><div  class="ab" style="float: right;position: relative;bottom:85px;" id="text"><i class="fa fa-plus" style="font-size:48px;color:blue"></i></div></a> 
      </div>
    </div>
   
    
    <div style="position: relative;bottom: 500px;height: 300px;width: 50%;margin-left: 400px;">
      <p style="text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px skyblue;font-size: 50px;"><marquee style="position: relative;bottom: 400px;font-family:Comic Sans MS;color: green; " ><img src="../public/images/cay.jpg" style="width: 50px;" > Thực phẩm hữu cơ<img src="../public/images/cay.jpg" style="width: 50px; margin-left: 10px;color: green; "></marquee></p> </div>
    
   <div style="position: relative;bottom:1070px;width: 100%;height:40%;" >
    <img id="picture" src="../public/images/wOrganic.jpg" style="width: 17%;height:   100%;position: relative;bottom: 4px; margin-left: 40px; float: left;">
    <img id="picture" src="../public/images/o.jpg" style="width: 17%;height: 100%;position: relative; bottom: 4px;margin-left: 20px;float: left;">
    
    <img id="picture" src="../public/images/hoa.jpg" style="width: 17%;height: 100%;position: relative;bottom: 4px; margin-left: 20px;float: left;">
    <img  id="picture" src="../public/images/organi.jpg" style="width: 17%;height: 100%;position: relative;bottom: 4px; margin-left: 20px;float: left;margin-right: 20px;">
    <img  id="picture" src="../public/images/v.jpg" style="width: 17%;height: 100%;position: relative;bottom: 4px; margin-left: 20px;float: left;margin-right: 20px;">
  </div>
    
  <div  class="danhmuc" style="position: relative;bottom: 620px; font-size: 40px; color: #f43b4f;"><p style="text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px skyblue;"><marquee style="position: relative;bottom: 350px;font-family:Comic Sans MS;color: green; " ><img src="../public/images/c.jpg" style="width:100px;position: relative;top: 15px;" >DANH MỤC SẢN PHẨM<img src="../public/images/c.jpg" style="width: 100px;position: relative;top: 15px;" ></marquee></p></div>
    <div style="position: relative;">
     <table class="class" style="position: relative;top:340px;">
    <tr>
      <td class="id" >
    <a href="index.php?module=dried_fruits&action=dried_fruits"><img class="a1" src="../public/images/xoai.jpg" style="width: 300px;"><button class="b1" style="position: relative;width: 150px;height: 50px;bottom: 55px;margin-left: 24px;">HOA QUẢ SẤY</button></a></div></td>
    <td class="id">
    <a style="" href="index.php?module=fruits_in_country&action=fruits_in_country"><img class="a1" src="../public/images/vai.jpg" style="width: 300px;"><button class="b1" style="position: relative;width: 150px;height: 50px;bottom: 10px;margin-left: 24px;">HOA QUẢ TRONG NƯỚC</button></a></td></tr>
  <tr>
    <td class="id">
    <a href="index.php?module=fruits_basket&action=fruits_basket"><img  class="a1" src="../public/images/gio-hoa-qua.jpg" style="width: 300px;"><button class="b1" style="position: relative;width: 150px;height: 50px;text-align: center;bottom: 15px;" >GIỎ QUẢ</button></a></td>
    <td class="id">
    <a   href="index.php?module=imported_fruits&action=imported_fruits"> <img class="a1" src="../public/images/vietquat.jpg" style="width: 300px;"><button class="b1" style="position: relative;width: 150px;height: 50px;text-align: center;bottom: 55px;margin-left: 25px;" >HOA QUẢ NHẬP KHẨU</button></a></td></tr>
  </table>
</div>
 
  <div style="position: relative;bottom: 800px; font-size: 40px; color: #f43b4f;height: 50px;width: 50%;margin-left: 400px;"><p style="text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px skyblue;"><marquee style="font-family:Comic Sans MS;color: green;" ><img src="../public/images/trê.jpg" style="width: 50px"> TIN TỨC NÔNG SẢN<img src="../public/images/trê.jpg" style="width: 50px;margin-left: 10px;"></marquee>
  </div>
       <div style="position: relative;bottom: 100px;"> 
        <table style="position: relative;bottom: 1100px;text-align: center;float: right;">
          <tr>
        <td class="news" style="position: relative;margin-right: 30px;width: 50%;">
          <a href="index.php?module=news&action=buoi">GIỎ QUÀ TRAO YÊU THƯƠNG 
        <img src="../public/images/gio.jpg" style="width: 300px;float: left;height: 200px;"></a><p>Chọn quà Tết không khó nhưng chọn một giỏ quà Tết tinh tế, đặc sắc dường như… chẳng đơn giản. Trước đây, mọi người có thể chúc Tết nhau bằng cặp bánh chưng, cân giò, bánh tét, con gà,.. Ngày nay, khi đời sống ngày càng được cải thiện, đi cùng với nó là những món quà sức khỏe, quý hiếm, được thiết kế sang trọng, bắt mắt song vẫn thể hiện sự quan tâm, tấm lòng chân thành sâu sắc của người tặng.</p></td>
            <td class="news" style="width: 50%;">
          <a href="index.php?module=news&action=duasap">LẠ LÙNG TRÁI DỪA SÁP TRÀ VINH
            <img src="../public/images/coconut.jpg" style="width: 300px;float: left;height: 200px;"></a><p>Trong chừng mươi năm trở lại đây, du khách đến Trà Vinh thường được nghe giới thiệu về một sản phẩm đang “hot” trên thị trường,một sản phẩm nghe quen nhưng cũng rất lạ có xuất xứ huyện Cầu Kè thuộc tỉnh Trà Vinh, </p></td>
          </tr>
          <br><br>
          <tr style="position: relative;top: 30px;">
            <td class="news" style="position: relative;margin-right: 20px;">
          <a href="index.php?module=news&action=dua">CÔNG DỤNG CỦA QUẢ DỨA
            <img src="../public/images/dua.jpg" style="width: 300px;float: left;height: 200px;"></a><p>Dứa chứa một nhóm các enzyme tiêu hóa được gọi là bromelain.
            Chúng hoạt động như các protease, phá vỡ các phân tử protein thành các khối xây dựng của chúng, chẳng hạn như axit amin và các peptide nhỏ.</p></td>
            <td class="news">
          <a href="index.php?module=news&action=mangcau">LỢI ÍCH KHÔNG NGỜ CỦA MÃNG CẦU XIÊM 
            <img src="../public/images/mangcau.jpg" style="width:300px;float: left;height: 200px;"></a><p>Mãng cầu xiêm (mãng cầu gai) là một loại quả vô cùng quen thuộc đối với mọi người. Loại quả này có ít calo, chứa nhiều chất xơ và vitamin C. Đặc biệt, mãng cầu là loại quả có chứa hàm lượng chất chống oxy hóa cực kỳ cao.</p></td>
          </tr>
          </div>
          <img src="../public/images/border.png" style="text-align: center;margin-left: 550px;position: relative;bottom: 50px;width:  430px">
          <div style="position: relative; font-size: 40px;text-align: center;color: violet"><p style="font-family:Comic Sans MS; ">CAM KẾT NGON-SẠCH-RẺ</p></div>

          <div>
            <div class="icon2"  style="position: relative;text-align: center;margin-left: 200px;float: left; "><img src="../public/images/icon4.jpg" style="width: 80px;position: relative;top: 15px;"><p style="font-size: 18px;position: relative;top: 30px;">Chất lượng đảm bảo</p></div>
            <div class="icon2"  style="position: relative;text-align: center;margin-left: 345px;float: left;"><img src="../public/images/icon2.jpg" style="width: 110px;position: relative;height: 130px;"><p style="font-size: 18px;">Vận chuyển nhanh chóng</p></div>
            <div class="icon2"  style="position: relative;text-align: center;margin-right : 270px;float: right; "><img src="../public/images/icon3.jpg" style="width: 100px;position: relative;height: 80px;top: 10px;"><p style="position:relative;font-size: 18px;top: 30px;">Khách hàng tin tưởng</p></div>
          </div>
          <marquee class='test' style='background-color: #db4dff;font-size: 40px;' >Chúng tôi luôn sẵn sàng phục vụ bạn.Hãy đến với fresh fruits để có trải nhiệm tốt nhất!</marquee>

          <div style="height: 40%;border-top: 2px  gray dotted;position: relative;top: 300px;background-color:#92D918 ">
            <iframe style="width: 300px;height: 260px;float: right;margin-right: 20px;position: relative;top: 10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.729950478349!2d105.84560164960224!3d21.00345948594338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe0dd0b2919d48ce9!2zSOG7jWMgdmnhu4duIENOVFQgQsOhY2ggS2hvYQ!5e0!3m2!1svi!2s!4v1615620222712!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
           <p style=" position: relative;  font-size: 25px;float: left;"><i class='fas fa-map-marker-alt' style='font-size:23px;color:red;margin-right: 10px;'></i>Địa chỉ liên hệ</p><br><br><br>
    <p style="position: relative;font-size: 25px;float: left;"><i class='fas fa-building' style='font-size:24px;margin-right: 10px;'></i>A17 Tạ Quang Bửu , phường Bách khoa , quận Hai Bà Trưng , Hà Nội</p><br><br><br>
    <p style="position: relative;font-size: 22px;float: left;"><i class="fa fa-phone" style="font-size:25px;margin-right: 10px;"></i>SĐT:012345679</p> <br><br><br>
    <p style="float: left;font-size: 25px;"><img src="../public/images/f.jpg" style="width: 30px;height: 30px;float: left;margin-right: 10px;">Fresh Fruits</p>
    <p style="float: right;font-size: 25px;margin-right: 500px;"><img src="../public/images/g.jpg" style="width: 30px;height: 30px;float: left;margin-right: 10px;">FreshFruits@gmail.com</p>
   
   
          </div>



<?php
require_once("layout/footer.php");
?>
		