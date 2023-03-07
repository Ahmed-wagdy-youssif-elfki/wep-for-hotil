<?php include("control.manger.php"); ?>
<!DOCTYPE html>
<html lang="عربي">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>  طلبات الحجز فرع القاهرة </title>
</head>
<body dir="" >  
               <nav class="topnav">
                                <a class="active" href="home mangear cairo.php"> الادارة</a>
                                <a href="hed-f1-cairo.php">  طلبات الحجز </a>
                                <a href="hed-f2-cairo.php"> ادرة الفوتير </a>
                                <a  href="#"> سجل الموظفين  </a> 
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
        <td width="120px"> رقم الهاتف</td>
        <td width="120px">  البريد</td>
        <td width="120px"> تارخ النزول  </td>
        <td width="120px">حتي  </td>
        <td width="120px">  عدد ايام النزول  </td>
        <td width="120px">    مطلوب الدفع  </td>
        </tr> 
        

         <?php
$nametapelsql='cairo';
$nametapelsql2='cairosul';
$reternurl='hed-f2-cairo.php';

hedf1cairo($nametapelsql ,$nametapelsql2,$reternurl,$connect);

        ?> 
    </main>   
    <hr>  
<style type='text/css'> 
                                /*      
                                        الستيل الخاص بالجدول في الصفحة => ادارة الفوتير 
                
                                */
                    
                table  {

                            color: #fffcfc;  
                            text-align:center;
                            font-size:18px;   margin-right: 0px;}
                    #statcTR {
                                background-color:#ff0055 ;
                                font-size:18px;
                                height:50px;}
                    
                .styletd0 {
                            background-color:#720852 ;
                            color: #d1b6fc;
                            font-size:18px;  }
                .styletd1{
                        background-color:#350142 ;
                        color: #9bf7c9;
                        font-size:16px;
                        text-align:right;  }
                .styletd2{
                        background-color:#350142 ;
                        color: #9bf7c9;
                        font-size:16px;
                        text-align:right;
                        height:30px; }
                    .styletd3{
                        background-color:#720852 ;
                        color: #d1b6fc;
                        font-size:16px;
                        text-align:right;
                        width:10px;
                        height:30px; }
                    .styletd0:hover {background-color:white ;  color: #270053;}
                    .styletd1:hover {background-color:white ;  color: #270053;}
                    .styletd2:hover {background-color:white ;  color: #270053;}
                    .styletd3:hover {  background-color:white ;  color: #270053; }


</style>
 </body>
 </html>
       