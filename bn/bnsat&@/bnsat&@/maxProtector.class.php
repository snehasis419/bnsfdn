<?php

class maxProtector{
	var $password = 'nagarmal91011';
	var $userid = 'bnsapplication';
	
    function showLoginForm(){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>User Authentication</title>
   <link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
       
       <center><h2 style="color:red">Admin Access only, Restricted for public use.</h2></center>  
       <center><a href="http://www.bnsatnalikafoundation.org" style="color:green">Go back Home.</a><br><br><br></center>  
       <div id="container">
            <div id="header"><div id="header_left"></div>
            <div id="header_main">bnsatnalikafoundation says</div><div id="header_right"></div></div>
            <div id="content">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                     <center>
					     <label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUserID:
                             <input name="id" type="text" size="30" />
                         </label><br><br>
                         <label>Password:
                             <input name="passwd" type="password" size="30" />
                         </label><br>
                         <label>
                             <input type="submit" name="submitBtn" class="sbtn" value="Login" />
                         </label>
                     </center>
                 </form>
             </div>
             <div id="footer"><a href="http://www.phpf1.com" target="_blank">Powered by david</a></div>
         </div>
</body>		 
<?php
    }

    function login(){
		$loggedin = isset($_SESSION['loggedin']) ? $_SESSION['loggedin'] : false;
        if ( (!isset($_POST['submitBtn'])) && (!($loggedin))){
            $_SESSION['loggedin'] = false;
			   $this->showLoginForm();
			   exit();
        } else if (isset($_POST['submitBtn'])) {
			   $pass = isset($_POST['passwd']) ? $_POST['passwd'] : '';
               $id = isset($_POST['id']) ? $_POST['id'] : '';
			   if ($pass != $this->password || $id != $this->userid) {
				   $_SESSION['loggedin'] = false;
				   $this->showLoginForm();
				   exit();     
			   } else {
				   $_SESSION['loggedin'] = true;
			   }
        }

    }
}

// Auto create
session_start();
$protector = new maxProtector();
$protector->login();
?>