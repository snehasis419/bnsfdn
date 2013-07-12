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
while(1)
{
 $i++;
 $ems=$em.$i;
 $stats=$stat.$i;
 $names=$namess.$i;
 if(isset($_POST[$ems]))
 {
    $emsl=$_POST[$ems];
    $sta=$_POST[$stats];
     $nama=$_POST[$names];
    $q5="UPDATE `bnsatucr_details` SET `status`='$sta' WHERE `email`='$emsl'"; 
    $q6=mysql_query($q5);
    if(!$q6)
    echo "error:---".mysql_error();
	$subject = 'Scholarship Update_B N Satnalika Foundation';
	$from = 'contactus@bnsatnalikafoundation.org';
	
    if($sta=="R")
	{
      $message = 'Dear '.$nama.',<br><br>
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
    if($sta=="S")
	{
      $message ='Dear '.$nama.',<br><br>
                 Thank you for considering our foundation. We appreciate your effort in applying for the scholarship.<b>. We are happy to inform you that your scholarship grant has been approved by the management.</b><br>
                 <b>You will be entitled for the following:</b><br>
                  1.Monthly scholarship of INR 300-1000 per month for a period of 1 year <br>
                  2.Scholarship Certificate<br>
                  3.Opportunity for Internship with our foundation<br><br>
                  
                  We request you to kindly update us with your Email Id and Phone no. so that we can co-ordinate for further processing. You are requested to send the mail to niraj.satnalika@bnsatnalikafoundation.org with a copy to bnsatnalikafoundation@gmail.com.<br><br>

                 <b>In case you fail to send the mail within 15 working days of the receipt of the mail, your candidature will be terminated automatically and no concerns whatsoever will be entertained regarding the same at a later stage.</b><br><br>
                 We wish you all the very best for your future endeavor.<br>
           <b>Best Regards,<br>
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

 }
 else
 {
   echo "Successfully Updated and corresponding email sent<br> <a href='results.php'><h3>Go Back</h3></a>";
   break;
 }
}     
?>