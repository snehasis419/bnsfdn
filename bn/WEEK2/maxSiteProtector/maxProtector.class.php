<?php
/*************************************************
 * Max's Site Protector
 *
 * Version: 1.0
 * Date: 2007-11-27
 *
 ****************************************************/
class maxProtector{
	var $password = 'test';
	
    function showLoginForm(){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Max's File Uploader</title>
   <link href="style/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
       <div id="container">
            <div id="header"><div id="header_left"></div>
            <div id="header_main">Max's Site Protector</div><div id="header_right"></div></div>
            <div id="content">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                     <center>
                         <label>Password:
                             <input name="passwd" type="password" size="20" />
                         </label><br/>
                         <label>
                             <input type="submit" name="submitBtn" class="sbtn" value="Login" />
                         </label>
                     </center>
                 </form>
             </div>
             <div id="footer"><a href="http://www.phpf1.com" target="_blank">Powered by PHP F1</a></div>
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
      
			   if ($pass != $this->password) {
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