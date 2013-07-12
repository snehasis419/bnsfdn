<?php 

$con=mysql_connect("localhost:2082","bnsatucr_babu","babulal2012") or die("not connected");
if(!$con)
{
	echo "not connected";
}
$x=mysql_select_db("bnsatucr_details1");
if(!$x)echo mysql_error();
$em="email";
 $i=0;
$stat="status";
$namess="name";
$dat=date("Y-m-d");
$qq="SELECT * FROM `bnsatucr_details` WHERE status='N'";
$qq1=mysql_query($qq);
while($row = mysql_fetch_array($qq1))
{
    
    
    $nama=$row['name'];
    $emsl=$row['email'];
    $q5="UPDATE `bnsatucr_details` SET `status`='R' WHERE `email`='$emsl'"; 
    $q6=mysql_query($q5);
    if(!$q6)
    echo "error:---".mysql_error();
	$subject = 'Scholarship Update_B N Satnalika Foundation';
	$from = 'contactus@bnsatnalikafoundation.org';
      $message ='Dear '.$nama.',<br><br>
                 Thank you for considering our foundation. We appreciate your effort in applying for the scholarship.<b>. However, we are sorry to inform you that your application is currently not considered by us for the scholarship.</b><br>
                 <b>Reason for Waitlist</b>: One of the following could be the reason for rejection:<br>
                  1.Percentage <85% <br>
                  2.Not eligible<br>
                  3.Annual Income sufficient as per Indian standards<br>
                  4.Incomplete application<br><br>
                  
                  We wish you all the very best for your future endeavor.<br><br>

                 <b>Please be informed that the decision of management is final in this regard and no mails/calls will be entertained under any circumstances<br>
           Best Regards,<br>
           For,<br>
           B N Satnalika Foundation<br>
           Dated:'.$dat.'</b>';
         $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
      $headers .= 'From:contactus <contactus@bnsatnalikafoundation.org>' . "\r\n";
      mail($from,$subject,$message,$headers);    
      if(mail($emsl, $subject, $message, $headers))
        echo "";
      else
       {
    	   echo "Mail send failure - to ".$emsl;
      	   echo "<br>";
        }
    
   
} 
   echo "Successfully Updated and corresponding email sent<br> <a href='results.php'><h3>Go Back</h3></a>";
   break;

     
?>