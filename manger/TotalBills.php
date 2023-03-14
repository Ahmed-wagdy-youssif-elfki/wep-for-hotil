<?php $connect=mysqli_connect("localhost","root","","hotals");  ?>

<!DOCTYPE html>
<html lang="عربي">
<head>
    <meta charset="UTF-8">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>     مجموع الفوتير     </title>
    
</head>
<body >  
                <nav class="topnav">
                                    <a class="active" href="home mangear sharm.php"> الادارة</a>
                                    <a href="hed-f1-sharm.php">  طلبات الحجز </a>
                                    <a href="hed-f2-sharm.php"> ادرة الفوتير </a>
                                    <a  href="TotalBills.PHP"> مجموع الفوتير    </a> 
                                    <div class="search-container">
                                        <a class="languch" href="../indxe.html"> تسجيل الخروج  </a>
                                    </div>
                </nav>
 <main>
    <table  dir ='rtl'  border="1" >
        <tr  >
        <td width="90px"> الفرع</td> 
        <td width="150Px" >نوع الحجز</td> 
        <td width="190px">الاسم الرباعي   </td>
        <td width="120px"> رقم الهوية</td> 
        <td width="120px">  عدد الايام </td>
        <td width="120px">  مطلوب الدفع </td>
        <td width="120px">  المدفوع   </td>
        </tr> 
 </main>   
 <?php 
    $XSarm=0;
    $XCairo=0;
    $ManySharm=0;
    $ManyCairo=0;
                       $sqlsarm="SELECT * FROM TotalBills where  adres='فرع شرم الشيخ'";
                       $sqlcairo="SELECT * FROM TotalBills where adres='فرع القاهرة'";
                       $rsharm=mysqli_query( $connect,$sqlsarm);
                       $rcairo=mysqli_query( $connect,$sqlcairo);
                       while( $row=mysqli_fetch_array ($rsharm)){
                        $adrs1=$row['adres'];
                        $typesql1=$row['types'];
                        $namess=$row['names'];
                        $idcards=$row['idcards'];
                        $DAYS=$row['DAYS'];
                        $MANTH=$row['PaymentIsRequired'];
                        $allsuls=$row['paidUp'];
                        echo "<tr cleass='styletr' > 
                        <td class ='styletd0 '> $row[adres]  </td> 
                        <td class ='styletd1'> $row[types] </td> 
                        <td class ='styletd2'> $row[names] </td>
                        <td class ='styletd1'> $row[idcards] </td>
                        <td class ='styletd3'> $row[DAYS] </td>
                        <td class ='styletd2'>$row[PaymentIsRequired] جـ</td>
                        <td class ='styletd1'> $row[paidUp] جـ </td>  
                        <tr> " ;  
                        $XSarm++ ;$ManySharm+=$allsuls;}
                       while( $row=mysqli_fetch_array ($rcairo)){
                        $adrs1=$row['adres'];
                        $typesql1=$row['types'];
                        $namess=$row['names'];
                        $idcards=$row['idcards'];
                        $DAYS=$row['DAYS'];
                        $MANTH=$row['PaymentIsRequired'];
                        $allsuls=$row['paidUp'];
                        echo "<tr cleass='styletr' > 
                        <td class ='styletd0 '> $row[adres]  </td> 
                        <td class ='styletd1'> $row[types] </td> 
                        <td class ='styletd2'> $row[names] </td>
                        <td class ='styletd1'> $row[idcards] </td>
                        <td class ='styletd3'> $row[DAYS] </td>
                        <td class ='styletd2'>$row[PaymentIsRequired] جـ</td>
                        <td class ='styletd1'> $row[paidUp] جـ </td>  
                        <tr> " ;
                        $XCairo++ ;$ManyCairo+=$allsuls;}
                       print_r(" sharm  is : ".$XSarm."   ".'many sharm is : '.$ManySharm) ;
                       print_r("<br>"." x cairo  is : ".$XCairo."  ".'many cairo is : '.$ManyCairo) ;
                       
                         
    $totalVisitors =1000;
    $newVsReturningVisitorsDataPoints = array(
        array("y"=> $XSarm, "name"=> "شرم الشيخ ", "color"=> "#E23A"),
        array("y"=> $XCairo, "name"=> " القاهرة ", "color"=> "#ee33C1")
    );
    mysqli_close($connect); 
                          

 ?>
 
 </body>
 </html>