<?php
require_once('user.php');
require_once('index.php');
$conn = new PDO("$dbtype:host=$hostname;dbname=$dbname", $username, $password);

class Employer extends User
{
	var $company_name;
	var $address;
	var $phone_number;
    public $internships;

    function register_via_username1($user,$pass,$email,$com,$add,$num,$dbh)
    {
        parent::register_via_username($user,$pass,$email);
        $this->company_name=$com;
        $this->address=$add;
        $this->phone_number=$num;
        $query="SELECT `user_id` FROM `user` WHERE `user_id`='$this->username';";
        $stmt=$dbh->prepare($query);
        $stmt->execute();
        $rslt=$stmt->fetch(PDO::FETCH_ASSOC);
        if(empty($rslt))
        {
            $query1="INSERT INTO `user` (`user_id`,`email_id`,`password`,`status`) VALUES ('$this->username','$this->email_id','$this->password','emp');";
            $stmt1 = $dbh->prepare($query1);
            $stmt1->execute();
            $query2="INSERT INTO `employer` (`user_id`,`status`,`company_name`,`address`,`phone_num`) VALUES ('$this->username','emp','$this->company_name','$this->address','$this->phone_number');";
            $stmt2 = $dbh->prepare($query2);
            $stmt2->execute();
            echo "Successful Registration";
        }
        else
        {
            echo "The user id already exists";
        }
    }
    public function _construct()
    {
    	$internships=array();
    	//load up the internships from the database
    }
   
	function create_internship($comp,$add,$phone)
	{
        $this->company_name=$comp;
        $this->address=$add;
        $this->phone_number=$phone;
        //store in database

	}
}

$a=new Employer();
//$a->register_via_username1("dave","dave","a@a.com","micro","a/b4-5","123456",$conn);
$a->login_via_username("dave","dave",$conn);

?>