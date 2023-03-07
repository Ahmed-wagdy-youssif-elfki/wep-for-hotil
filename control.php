<?php 
                                        // .....[ الكود الاساسي ]........

#_______________________________ المتغيرات 
$connect=mysqli_connect("localhost","root","","hotals"); ##_____ الاتصل بقاعدة البيانات____________________
 
##function closeSQL() {mysqli_close('localhost','root','','hotals');} ##____________( قطع الاتصال بقاعدة البيانات )


// _________________________________________________________________________________( option slect tapol sql in SUL for type )
function option($connect)
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
#_________________________________________________________________________________________________ ( استمارة الحجز )

function singddatasql($connect,$dna) 
{
 if(isset($_POST['sub'])) 
 {
                      $far3=$_POST['far3'] ; 
                      $no3=$_POST['no3'];    
                      $sunames=$_POST['usname'] ; 
                      $nidcards=$_POST['nidcard'] ; 
                      $usphons=$_POST['tel'] ; 
                      $emails=$_POST['usemail'] ; 
                      $stdats=$_POST['stdata'] ; 
                      $endatas=$_POST['endata'] ;
                      $stdats[8].$stdats[9]; // day start       
                      $stdats[6].$stdats[5]; //manth  start
                      $endatas[8].$endatas[9]; // day end       
                      $endatas[6].$endatas[5]; //manth  end
                     $day=(($endatas[8].$endatas[9])-($stdats[8].$stdats[9]));
                     $muth=($endatas[6].$endatas[5])-($stdats[6].$stdats[5]);
                     settype($day,'integer');
                     settype($muth,'integer'); 
                   
if ($_POST['nidcard']!=$_POST['nidcard2']) 
   {
        echo "<p> خطاء رقم الهوية الشخصية غير مطابق الرجاء التاكد واعادة المحاوله مرة اخري </p>";
    }
      if ($day==0 || $day<0 && $muth<=0){echo "<p class=' '> الرجاء ادخال تاريخ صحيح  </p>"; }
      

      #_____________________________________حساب الفتوره _____________________________

                                  if ($no3=="غرفة شخصية لفرد واحد" )
                                  { $alls=$day*150;}
                                  if ($no3=="غرفة لشخصين")
                                  {$alls=$day*300;}
                                  if ($no3=="غرفة خاصة ")
                                  { $alls=$day*400;}
                                  if ($no3=="غرفة عائلية ")
                                  { $alls=$day*500;}
                                  if ($no3=="جناح خاص")
                                  { $alls=$day*1000;}
                           

  if ($day>0  && $muth<=0 || $muth<0 ){
 // عملية المعالجة للبيانات والتاكد من صحتها وعدم تكراره بقاعدة البيانات
            $eltakdMenDataName="select * from $dna where names='$sunames'";                                          
            $atakdName=mysqli_query($connect,$eltakdMenDataName);
            if(mysqli_num_rows($atakdName)>0){
                echo " <p align='center'> لقد قمت بالحجز بهذا الاسم بالفعل وبياناتك مسجلة بلموعد المحدد قد يكون هناك تشبه بلاسم يرجاه ادخال اسمك رباعي بشكل اوضح ونحن بخدمتك ان تعسر الامر يمكنك التواصل بالاتصال علي 000000000 لمرجعت الامر </p>";
            } 
            $eltakdMenDataIdcard="select * from $dna where idcards='$nidcards'";                                        
            $atakdIdcard=mysqli_query($connect ,$eltakdMenDataIdcard);
          if (mysqli_num_rows($atakdIdcard)>0)
              {
                 echo " <p align='center'> لقد قمت بالحجز بالفعل وبياناتك مسجلة برقم الهوية الشخصي المحدد الرجاء التاكد من صحة البيانات للتواصل يمكن الاتصال علي 000000000 لمرجعت الامر </p>";
              }


     // في حالة البيانات بشكل سليم 
         if (mysqli_num_rows($atakdIdcard)==0 &&mysqli_num_rows($atakdName)==0) 
              { 
                echo " <h3 align='centar'>  $far3 </h3> ";
                echo "<table  border='1.5' class=''> ";
                echo " <tr > <td  > الاسم </td>  <td> $sunames </td></tr> ";
                echo " <tr> <td> الهوية الشخصية  </td><td>  $nidcards </td> </tr> ";
                echo "   <tr>   <td > نوع الحجز  </td>  <td>  $no3</td> </tr>";
                echo " <tr> <td>الهاتف</td> <td>  $usphons </td> </tr>";
                echo "   <tr><td> البريد الالكتروني</td> <td> $emails </td> </tr> ";
                echo "   <tr><td> الحجز من تاريخ</td> <td> $stdats </td> </tr> ";
                echo "   <tr><td> حتي تاريخ</td> <td>  $endatas </td> </tr> </table> ";
                echo "   <tr><td>  عدد ايام الحجز</td> <td> $day </td> </tr> </table> ";
                echo "   <tr><td>  اجمالي المطلوب دفعه </td> <td>  $alls </td> </tr> </table> ";
                echo " <p> هل البيانات صحيحة </p> ";
                echo " <form method='pst'> ";
                echo " <h3 align='center' class='ms'> تم الحجز  </h3>";  
                echo "<input type='submit' name='yes' value='نعم '> </form>";
                $insert="insert into $dna values ('$far3','$no3','$sunames',' $nidcards','$usphons',' $emails',' $stdats','$endatas',' $day','$muth','$alls')";
                 mysqli_query($connect , $insert); 
 }}}}
?>