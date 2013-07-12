<?php
class User
{
	var $username;
	var $password;
	var $email_id;
	var $facebook_token;
	var $twitter_token;

	function register_via_username($user,$pass,$email)
	{
        $this->username=$user;
        $this->password=md5($pass);
        $this->email_id=$email;

	}
	function register_via_facebook($face)
	{
        $this->facebook_token=$face;    
        //then dump these values in database
	}
	function register_via_twitter($twitter)
	{
		$this->twitter_token=$twitter;
		//then dump these values in database
	}
	function login_via_username($user,$pass,$dbh)
	{
       $this->username=$user;
       $this->password=md5($pass); 
       $query="SELECT `user_id`,`password` FROM `user` WHERE `user_id`='$this->username' AND `password`='$this->password';";
       $stmt=$dbh->prepare($query);
       $stmt->execute();
       $rslt=$stmt->fetch(PDO::FETCH_ASSOC);
       if(empty($rslt))
       {
       	echo "Login Failed";
       }
       else
       {
       	echo "Login Successful";
       }

    }
	function login_via_facebook($face)
	{
		//check against database
	}
	function login_via_twitter()
	{
		//check against database
	}  
}

?>