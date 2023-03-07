
<!DOCTYPE html>
<html lang="عربي">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./style/log.css" />
  <link rel="stylesheet" href="./style/style.css" />

  <title> تسجيل الدخول ادارة شرم الشيخ   </title>
</head>
<body> 
      <nav class="topnav">
              <a class="active" href="indxe.html"> الرئيسية</a>
              <a href="long sharm.php">الحجز بفرع شرم الشيخ </a>
              <a href="long cairo.php">الحجز بفرع القاهرة</a>
              <div class="search-container">                      
                  <div id="mySidenav" class="sidenav">
                    <a href="sing-sharm.php" id="about"><i class="fa fa-fw fa-user"></i> دخول ادارة شرم</a>
                    </i> <a href="sing-cairo.php" id="blog"><i class="fa fa-fw fa-user"></i>دخول ادارة القاهرة </a>
                    </div>

             </div>
 </nav>
    <div class="imglogo"> </div>
      <div id='bodylog'>
          <form class="formLog" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
          <input class="textInput1" name="usadres" type="text"  placeholder=" هوية الدخول  " >
          <br>
          <input class="textInput2" name="uspassword" type="password"  placeholder="كلمة المرور ">
          <br>
          <input class="submitlog" name="submitlog" type="submit" value=" دخول "> 
          </form>
      </div>
      <?php
$connect=mysqli_connect("localhost","root","","hotals");
if(isset($_POST['submitlog']))
{
        $usadres=$_POST['usadres']; 
        $uspassword=$_POST['uspassword'];
        $nSQL="select * from usmanger where EMAILS ='$usadres' AND PASSORD ='$uspassword'";  
        if ($resalt= mysqli_query($connect,$nSQL)){
          if  (mysqli_num_rows($resalt)==1) {
                echo "walcam ";
                header("location:./manger/home mangear sharm.php");
          }  if (mysqli_num_rows($resalt)!=1) { echo " <p id = 'masg'> كلمة المرور او اسم المستخدم غير صحيح !  </p>"; }

        
        }
    }

    mysqli_close($connect);  

       ?>
</body>
</html>
