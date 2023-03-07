<?php 
                                        // .....[ الكود الاساسي ]........

#_______________________________ المتغيرات 
$connect=mysqli_connect("localhost","root","","hotals"); ##_____ الاتصل بقاعدة البيانات____________________
 
##function closeSQL() {mysqli_close('localhost','root','','hotals');} ##____________( قطع الاتصال بقاعدة البيانات )


// ___________________________________________________________________( option slect tapol sql in SUL for type )
function option2($connect)
  {
  $selectda="select * from sul ";
  $resd1=mysqli_query( $connect,$selectda);
                  while( $slesql1=mysqli_fetch_array ($resd1))
                          {
                          $type=$slesql1['type'];
                          $sul=$slesql1['EL\1d'];
                          echo "<option value='$type' >"." le ". $type ." " .$sul." </option> " ;
                          }   
 }
#_________________________________________________________ ( استمالرة اضافة نزيل   )

 function ADDSHARM($connect,$TYPYEDATA){
  if(isset($_POST['sub'])){
                       $far3=$_POST['far3'] ; 
                       $no3=$_POST['no3'];    
                       $sunames=$_POST['usname'] ; 
                       $nidcards=$_POST['nidcard'] ; 
                       $usphons=$_POST['tel'] ; 
                       $emails=$_POST['usemail'] ; 
                       $stdats=$_POST['stdata'] ; 
                       $endatas=$_POST['endata'] ;
                       $stdats[8].$stdats[9]; // day start       
                      $manth1=$stdats[5].$stdats[6]; //manth  start
                       $endatas[8].$endatas[9]; // day end       
                     $manth2=$endatas[5].$endatas[6]; //manth  end
                      $day=(($endatas[8].$endatas[9])-($stdats[8].$stdats[9]));
                      $muth=($manth1-$manth2);
                      settype($day,'integer');
                      settype($manth1,'integer'); 
                      settype($manth2,'integer'); 
                      settype($muth,'integer'); 
                      if ($no3=="غرفة شخصية لفرد واحد" ) { $alls=$day*150;}
                      if ($no3=="غرفة لشخصين") {$alls=$day*300;}
                      if ($no3=="غرفة خاصة ")  { $alls=$day*400;}
                      if ($no3=="غرفة عائلية ") { $alls=$day*500;}
                      if ($no3=="جناح خاص") { $alls=$day*1000;}
 //_____________________________________________________ معالجة البيانات والتاكد من صحتها قبل الارسال 
  
 if ($_POST['nidcard']!=$_POST['nidcard2']) {
  echo "<p> خطاء رقم الهوية الشخصية غير مطابق الرجاء التاكد واعادة المحاوله مرة اخري </p>";}
   if ($day==0 || $day<0 && $muth<=0){echo "<p class=' '> الرجاء ادخال تاريخ صحيح  </p>"; }                           
   if ($day>0  && $muth<=0 || $muth<0 ){
             $eltakdMenDataName="select * from $TYPYEDATA where names='$sunames'";                                          
             $atakdName=mysqli_query($connect ,$eltakdMenDataName);
             if(mysqli_num_rows($atakdName)>0){
                 echo " <p align='center'> لقد قمت بالحجز بهذا الاسم بالفعل وبياناتك مسجلة بلموعد المحدد قد يكون هناك تشبه بلاسم يرجاه ادخال اسمك رباعي بشكل اوضح ونحن بخدمتك 
                 ان تعسر الامر يمكنك التواصل بالاتصال علي .. لمرجعت الامر </p>";}            
             $eltakdMenDataIdcard="select * from $TYPYEDATA where idcards='$nidcards'";                                        
             $atakdIdcard=mysqli_query($connect ,$eltakdMenDataIdcard);
           if (mysqli_num_rows($atakdIdcard)>0){
                   echo " <p align='center'> لقد قمت بالحجز بالفعل وبياناتك مسجلة برقم الهوية الشخصي المحدد الرجاء التاكد من صحة البيانات 
                   للتواصل يمكن الاتصال علي 000000000 لمرجعت الامر </p>"; } 
          if (mysqli_num_rows($atakdIdcard)==0 &&mysqli_num_rows($atakdName)==0) 
               { 
                 echo "  <div class='msg'>
                 <h3 align='centar'>  $far3 </h3> <br>
                 <h2 align='center' class='ms'> تم الحجز  </h2> 
                  <table class='tabl'> 
                   <tr > <td  > الاسم </td>  <td> $sunames </td></tr> 
                 <tr> <td> الهوية الشخصية  </td><td>  $nidcards </td> </tr> 
                   <tr>   <td > نوع الحجز  </td>  <td>  $no3</td> </tr>
                  <tr> <td>الهاتف</td> <td>  $usphons </td> </tr>
                   <tr><td> البريد الالكتروني</td> <td> $emails </td> </tr> 
                   <tr><td> الحجز من تاريخ</td> <td> $stdats </td> </tr> 
                   <tr><td> حتي تاريخ</td> <td>  $endatas </td> </tr> </table> 
                    <tr><td>  عدد ايام الحجز</td> <td> $day </td> </tr> </table> 
                    <tr><td>  اجمالي المطلوب دفعه </td> <td>  $alls </td> </tr> </table> 
                 <p> هل البيانات صحيحة </p><br> 
                 <form  method ='get'>
                 <input  type ='submit' value ='حجز'>  
                 </form>
                

                 </div> 
                    <style typy=text/css>
                                          .msg {
                                            position: absolute;
                                            top: 266px;
                                            left: 543px;
                                            background-color: rgb(6 152 231);
                                            color: #641e48;
                                            width: auto;
                                            height: auto;
                                            border-radius: 24px;
                                            box-shadow: #05073d 4px 5px 14px 2px, #05073e -5px 5px 14px 2px;
                                            text-align: center;
                                            font-size:16px;
                                          }
                                            
                                          .msg:hover {
                                            box-shadow: #05073d 4px 5px 14px 2px, #05073e -5px 5px 14px 2px;
                                            font-size:18px;
                                          }

                                            h3{
                                            }
                                            .tabl{
                                                  text-align: center;
                                                  border-color: black;
                                                  color: black;
                                                  border-style: double;
                                                  direction: rtl;
                                                  display: -webkit-box;

                                            }
                                            .tabl > tr {color: black;

                                            }
                                            .tabl > tr > td {color: black;

                                            }
                                            #button-mg {
                                                        margin-bottom: 15px;
                                                        margin-left: 10px;
                                                        min-width: 100px;
                                                        background-color: rgb(96, 247, 51);
                                                        color:rgb(25, 0, 255) ;
                                                        margin-top: 20px;
                                                        border-radius: 5px;

                                            }

                    </style> ";
                              
                 $insert="insert into $TYPYEDATA values ('$far3','$no3','$sunames',' $nidcards','$usphons',' $emails',' $stdats','$endatas',' $day','$muth','$alls')";
                  mysqli_query($connect , $insert);  } 
                }
              }
 }


//...........................( ..hed f1 ..)
function hedf1cairo($nametapelsql,$nametapelsql2,$reternurl,$connect){
$selectdata="select * from $nametapelsql ";
$resdata=mysqli_query( $connect,$selectdata);
$x=1; $y=1;

      while( $row=mysqli_fetch_array ($resdata)) {
                  $adrs1=$row['adres'];
                  $typesql1=$row['types'];
                  $namess=$row['names'];
                  $idcards=$row['idcards'];
                  $usphons=$row['tel'];
                  $emails=$row['emails'];
                  $sti=$row['stdata'];
                  $eti=$row['endata'];  
                  $DAYS=$row['DAYS'];
                  $MANTH=$row['MANTH'];
                  $allsuls=$row['allsuls'];
                  echo "<tr cleass='styletr' > 
                  <td class ='styletd0 '>  $row[adres]  </td> 
                  <td class ='styletd1'>  $row[types] </td> 
                  <td class ='styletd2'>  $row[names] </td>
                  <td class ='styletd1'>  $row[idcards] </td>
                  <td class ='styletd1'>  $row[tel] </td>
                  <td class ='styletd2'> $row[emails] </td>
                  <td class ='styletd1'>  $row[stdata] </td>
                  <td class ='styletd1'>  $row[endata] </td>
                  <td class ='styletd3'>  $row[DAYS] </td>
                  <td class ='styletd1'>  $row[allsuls] LE </td>  
                  
                   <td><form action='' method='get'>
                  <input name='a$x' class='' type='submit' value='تاكيد الحجز'>
                  <button name='d$y'>حزف والغاءالحجز</button>
                  </form></td><tr>";
                                                               
                        if(isset($_GET['a'.$x]))
                        {  
                        $iss="insert into $nametapelsql2 values('$adrs1','$typesql1','$namess',
                        ' $idcards','$usphons',' $emails',' $sti','$eti',
                        ' $DAYS','$MANTH','$allsuls')";
                        $del="delete FROM $nametapelsql where idcards=$idcards ";
                        mysqli_query($connect ,$iss);
                        mysqli_query($connect ,$del);
                        echo "<br>"."<p color='#1a0772'> تم تاكيد الحجز</p>";
                        header("location:$reternurl");
                        }  
                        if(isset($_GET['d'.$y])) {
                       
                        echo "<br>"."<p color='#1a0772'> تم حذف البيانات والغاءالحجز</p>";
                        header("location:$reternurl"); }
                        $x++ ; $y++; }
                        mysqli_close($connect);  

                      }
                                                         
 //...........................(  ..hed f2.. )
 function setlocalef2( $nametapelsql2,$connect){
 $selectdata="select * from $nametapelsql2";
 $resdata=mysqli_query( $connect,$selectdata);
 $namplog=0;
 $broom=200;
 
      while( $row=mysqli_fetch_array ($resdata)) {                                            
             echo "<tr cleass='styletr' > 
             <td class ='styletd0 '>  $row[adres]  </td> 
             <td class ='styletd1'>  $row[types] </td> 
             <td class ='styletd2'>  $row[names] </td>
             <td class ='styletd1'>  $row[idcards] </td>
             <td class ='styletd1'>  $row[tel] </td>
             <td class ='styletd2'> $row[emails] </td>
             <td class ='styletd1'>  $row[stdata] </td>
             <td class ='styletd1'>  $row[endata] </td>
             <td class ='styletd3'>  $row[DAYS] </td>
             <td class ='styletd1'>  $row[allsuls] LE </td>  
             </tr> "; 
             $namplog++;
               }
              $crome=$broom-$namplog;
        //       الازرار المتوجدة بالجوانب الخاصاة بتعريف عدد الغرف الفعلي والمحجوز منه           
        //         بلاضافة للستيل الخاص بهم 
              echo "
                    <div id='mySidenav' class='sidenav'>
                            <a href='#' id='about'>اجمالي الحجوزات $namplog </a>
                            <a href='#' id='blog'>غرف فارغة $crome </a>
                      </div> ";




                      

                              
mysqli_close($connect);
 }

                    ?>
              