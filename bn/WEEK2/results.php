<html>
<head>
<title>
Table View
</title>
<body>
<?php
$db_type = "mysql";
$hostname = "localhost";
$username = "bnsatucr_babu";
$password = "babulal2012";
$db = "bnsatucr_details";
$dbh = new PDO ( "$db_type:host=$hostname;dbname=$db", $username, $password );
$err_no = 0;  
$query = "SELECT * FROM `bnsatucr_details`;";
$stmt = $dbh->prepare ( $query );
//$stmt->bindParam ( ":isbn", $_GET['isbn'] );
$stmt->execute();
echo '<table border="1px">';
echo "<tr>";
echo "<th><b>Name</b></th>";
echo "<th><b>Email</b></th>";
echo "<th><b>DOB</b></th>";
echo "<th><b>Category</b></th>";
echo "<th><b>ISBN</b></th>";
echo "<th><b>Father Name</b></th>";
echo "<th><b>Mother Name</b></th>";
echo "<th><b>Guardian Name</b></th>";
echo "<th><b>Contact</b></th>";
echo "<th><b>Income</b></th>";
echo "<th><b>Present Address</b></th>";
echo "<th><b>Permanent Address</b></th>";
echo "<th><b>Degree</b></th>";
echo "<th><b>Institute</b></th>";
echo "<th><b>Bank Name</b></th>";
echo "<th><b>Account No</b></th>";
echo "<th><b>Holder Name</b></th>";
echo "<th><b>Branch Name</b></th>";
echo "<th><b>IFSC</b></th>";
echo "<th><b>Addinfo</b></th>";
echo "</tr>";
$i=0;
while(1)
{
$rslt=$stmt->fetch(PDO::FETCH_ASSOC);
if(empty($rslt))
{
  break;
}
$name=htmlspecialchars($rslt['name']);
$email=htmlspecialchars($rslt['email']);
$dob=htmlspecialchars($rslt['dob']);
$category=htmlspecialchars($rslt['category']);
$isbn=htmlspecialchars($rslt['sex']);
$Fname=htmlspecialchars($rslt['Fname']);
$Mname=htmlspecialchars($rslt['Mname']);
$Gname=htmlspecialchars($rslt['Gname']);
$Cno=htmlspecialchars($rslt['Cno']);
$income=htmlspecialchars($rslt['income']);
$pre_add=htmlspecialchars($rslt['pre_add']);
$per_add=htmlspecialchars($rslt['per_add']);
$degree=htmlspecialchars($rslt['degree']);
$institute=htmlspecialchars($rslt['institute']);
$Bname=htmlspecialchars($rslt['Bname']);
$Ano=htmlspecialchars($rslt['Ano']);
$Hname=htmlspecialchars($rslt['Hname']);
$BBname=htmlspecialchars($rslt['BBname']);
$ifsc=htmlspecialchars($rslt['ifsc']);
$addinfo=htmlspecialchars($rslt['addinfo']);
echo "<tr>";
echo "<td>$name</td>";
echo "<td>$email</td>";
echo "<td>$dob</td>";
echo "<td>$category</td>";
echo "<td>$isbn</td>";
echo "<td>$Fname</td>";
echo "<td>$Mname</td>";
echo "<td>$Gname</td>";
echo "<td>$Cno</td>";
echo "<td>$income</td>";
echo "<td>$pre_add</td>";
echo "<td>$per_add</td>";
echo "<td>$degree</td>";
echo "<td>$institute</td>";
echo "<td>$Bname</td>";
echo "<td>$Ano</td>";
echo "<td>$Hname</td>";
echo "<td>$BBname</td>";
echo "<td>$ifsc</td>";
echo "<td>$addinfo</td>";
echo "</tr>";
}


echo "</table";
?>
</body>
</html>