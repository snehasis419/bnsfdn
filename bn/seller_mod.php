<html>
<head>
<title>
Seller Form
</title>
</head>
<body background="images/back.png" style="background-repeat:no-repeat;background-size:cover">
<?php
$name_var=0;
$st_name_var=0;
$phone_var=0;
$email_var=0;
$city_var=0;
$cat_check=0;
$sell_check=0;
$expression = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$/";
$name="";
$store="";
$phone="";
$email="";
$city="";
$other="";
$det="";
$cats=array();

if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  if(!preg_match('/^[a-zA-Z0-9]{5,}$/', $name))
  {
     $name_var=1;
  }
  $store=$_POST['st_name'];
  if(!preg_match('/^[a-zA-Z0-9 ]{5,}$/', $store))
  {
     $st_name_var=1;
  }
  $phone=$_POST['phone'];
  if(!preg_match("/^[7-9]{1}[0-9]{9}$/", $phone))
  {
     $phone_var=1;
  }
  
$email=$_POST['email'];
if (!preg_match($expression, $email)) 
  {
      $email_var=1; 
  }
$city=$_POST['city'];
if(!preg_match('/^[a-zA-Z]{3,}$/', $city))
  {
     $city_var=1;
  }
if(empty($_POST['other']) && empty($_POST['cat']))
{
   
  $cat_check=1; 
}

$already=$_POST['already'];
if($already=="yes" && empty($_POST['det']))
{
  $sell_check=1;
}
$other=$_POST['other'];
$det=$_POST['det']; 
} 
?>  
<div style="float:center">
<img src="images/header1.png">
</div>
<div>
<h1>Seller Please Enter Your Details</h1>
</div>
<div>
<form action="<?php echo'seller_mod.php'?>" method="<?php echo 'post'?>">
<div>
<div style="float:left">
Name: <br><br>
Online Store Name:<br><br> 
Mobile Number: <br><br>
Email: <br><br>
City: <br><br>
</div>
<div style="float:right;line-height:200%;margin-right:550px">
<div>
<?php 
if($name_var==1)
echo '<font color="red">Name alphanumeric and atleast 5 characters no spaces</font>';
else
echo "&nbsp";
?>
</div>
<div>
<?php
if($st_name_var==1)
echo '<font color="red">Store name alphanumeric and atleast 5 characters</font>';
else
echo "&nbsp";
?>
</div>
<div>
<?php
if($phone_var==1)
echo '<font color="red">Mobile Number should be valid and 10 digits</font>';
else
echo "&nbsp";
?>
</div>
<div>
<?php
if($email_var==1)
echo '<font color="red">Enter valid email address</font>';
else
echo "&nbsp";
?>
</div>
<div>
<?php
if($city_var==1)
echo '<font color="red">Enter valid city name</font>';
else
echo "&nbsp";
?>
</div>
</div> 
<div style="float:center;line-height:80%">
<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $name;?>"><br><br>
<input type="string" name="st_name" value="<?php if(isset($_POST['st_name'])) echo $store;?>"><br><br>
<input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) echo $phone;?>"><br><br>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $email;?>"><br><br>
<input type="text" name="city" value="<?php if(isset($_POST['city'])) echo $city;?>"><br><br>
</div>
</div><br>
Category: <br><br>
<?php 
if($cat_check==1)
{
  echo '<font color="red">Either select a category or enter other business description in textbox</font><br><br>';
}
?>  
<div style="position:relative;left:40px">
<input type="checkbox" name="cat[]" value="mobilestabs">Mobiles and Tablets<br>
<input type="checkbox" name="cat[]" value="computers">Computers<br>
<input type="checkbox" name="cat[]" value="electronics">Electronics<br>
<input type="checkbox" name="cat[]" value="cameras">Cameras<br>
<input type="checkbox" name="cat[]" value="clothing">Clothing<br>
<input type="checkbox" name="cat[]" value="jewellery">Jewellery and Watches<br>
<input type="checkbox" name="cat[]" value="homegarden">Home and Garden<br>
<input type="checkbox" name="cat[]" value="homeappliance">Home Appliances<br>
<input type="checkbox" name="cat[]" value="beautyperfume">Beauty and Perfume<br>
<input type="checkbox" name="cat[]" value="healthnutri">Health and Nutrition<br>
<input type="checkbox" name="cat[]" value="sportsoutdoor">Sports and Outdoor<br>
<input type="checkbox" name="cat[]" value="booksmedia">Books and Media<br>
<input type="checkbox" name="cat[]" value="kidstoys">Kids and Toys<br>
<input type="checkbox" name="cat[]" value="gaming">Gaming<br>
<input type="checkbox" name="cat[]" value="Auto">Auto Accesories<br>
<input type="checkbox" name="cat[]" value="giftflowers">Gift and Flowers<br>
<input type="checkbox" name="cat[]" value="pets">Pet Supplies<br><br>
</div>
If Others Please Specify and Enter any Other Details you Want us to Know:-<br>
<textarea rows="5" cols="30" name="other" ><?php if(isset($_POST['other'])) echo $other;?></textarea><br><br>
Do you already Sell Online:-<br>
<?php 
if($sell_check==1)
{
   echo '<br><font color="red">If you have selected yes enter where you are currently selling in the textbox below</font><br><br>';
}
?>   
<input type="radio" name="already" value="yes">Yes&nbsp
<input type="radio" name="already" value="no" checked>No<br><br>
If Yes Please Give Details:-<br>
<textarea rows="5" cols="30" name="det" ><?php if(isset($_POST['det'])) echo $det;?></textarea><br><br>
<input type="submit" value="Submit Details" name="submit">
</form>
</div>
</body>
</html>