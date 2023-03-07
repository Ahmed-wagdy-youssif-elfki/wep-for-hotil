<?php include("control.manger.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/long.css">
    <link rel="stylesheet" href="../style/style.css">

    <title>  ادرة فرع شرم الشيخ  </title>
</head>
<body >  

     <nav class="topnav">
                        <a class="active" href="home mangear sharm.php"> الادارة</a>
                        <a href="hed-f1-sharm.php">  طلبات الحجز </a>
                        <a href="hed-f2-sharm.php"> ادرة الفوتير </a>
                         <a  href="#"> سجل الموظفين  </a> 
                        <div class="search-container">
                            <a class="languch" href="../indxe.html"> تسجيل الخروج  </a>
                        </div>
     </nav>
   
    <h1 align='center'> ادرة شررم الشيخ</h1>
    
    <div id='long'>
    <h2>  تسجل نزيل جديد  </h2>
<form action="" method="POST">
<select class="far3" name="far3" required >
        <option value="فرع شرم الشيخ">فرع شرم الشيخ </option>
    </select> 
    <select class="select-in" name="no3" required>
        <option> </option>
        <?php option2($connect);  ?>
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
   $TYPYEDATA="sharmsul";
   ADDSHARM($connect,$TYPYEDATA) ;
   mysqli_close($connect);  
   print_r($_POST);

 ?>
</body>
</html>
