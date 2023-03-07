
<?php include("control.php"); ?>

<!DOCTYPE html>
<html lang="عربي">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css" >
    <link rel="stylesheet" href="style/long.css">

    <title>   تسجيل بفرع القاهرة   </title>
</head>
<body dir="">
    
<nav class="topnav">
        <a class="active" href="indxe.html"> الرئيسية</a>
        <a href="long sharm.php">الحجز بفرع شرم الشيخ </a>
        <a href="long cairo.php">الحجز بفرع القاهرة</a>
        <div class="search-container">
          
                        <a class="languch" href="home-en.php"> english </a>
                
            <div id="mySidenav" class="sidenav">
               <a href="sing-sharm.php" id="about"><i class="fa fa-fw fa-user"></i> دخول ادارة شرم</a>
               </i> <a href="sing-cairo.php" id="blog"><i class="fa fa-fw fa-user"></i>دخول ادارة القاهرة </a>
              </div>

        </div>
     </nav>
    
    <div id='long'>
    <h2>  تسجل نزيل جديد  </h2>
<form action="" method="POST">
<select class="far3" name="far3" required >
        <option value="فرع القاهرة">فرع القاهرة   </option>
    </select> 
    <select class="select-in" name="no3" required>
        <option> </option>
        <?php  option($connect);  ?>
        </select><br>
    <label class='labeldata2'> حتي تاريخ  </label>
    <label class='labeldata1'> الحجز من تاريخ </label><br>
    <input class="s-input " id='startdata' type="date" name="stdata" requirsed>
    <input class="s-input" id="enddata" type="date" name="endata" placeholder="  " required>
      <input class="s-input" type="text" name="usname" placeholder="الاسم بالكامل " required>
      <input class="s-input" type="number" name="nidcard" placeholder=" رقم الهوية الشخصية" required>
      <input class="s-input" type="number" name="nidcard2" placeholder=" تاكيد الهوية الشخصية" required>
      <input class="s-input" type="text" name="gins" placeholder="الجنسية" required>
      <input class="s-input" type="tel" name="tel" placeholder=" رقم الهاتف للتواصل" required>
      <input class="s-input" type="email" name="usemail" placeholder="البريد الاكتروني " required><br>
      <input class="sub" id='sub' type="submit" name="sub" value="حجز ">  
      <input class="sub subexe" id='' type="reset" name="index.php" value=" اعادة املاء السجل "> 
  </form></div>
  <?php
   $dna="cairo";
   singddatasql($connect,$dna);
   mysqli_close($connect);  

 ?>
</body>
</html>
