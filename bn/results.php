<html>
<head>
<title>
Table View
</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<style>

</style>
</head>
<body>
<?php
include 'xss_encode.php';
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
echo '<table border="1px" class="table table-bordered">';


while ($rslt = $stmt->fetch(PDO::FETCH_ASSOC))
{
$name=xss_encode($rslt['name'],0)[1];
$email=xss_encode($rslt['email'],0)[1];
$dob=xss_encode($rslt['dob'],0)[1];
$category=xss_encode($rslt['category'],0)[1];
$isbn=xss_encode($rslt['sex'],0)[1];
$Fname=xss_encode($rslt['Fname'],0)[1];
$Mname=xss_encode($rslt['Mname'],0)[1];
$Gname=xss_encode($rslt['Gname'],0)[1];
$Cno=xss_encode($rslt['Cno'],0)[1];
$income=xss_encode($rslt['income'],0)[1];
$pre_add=xss_encode($rslt['pre_add'],0)[1];
$per_add=xss_encode($rslt['per_add'],0)[1];
$degree=xss_encode($rslt['degree'],0)[1];
$institute=xss_encode($rslt['institute'],0)[1];
$Bname=xss_encode($rslt['Bname'],0)[1];
$Ano=xss_encode($rslt['Ano'],0)[1];
$Hname=xss_encode($rslt['Hname'],0)[1];
$BBname=xss_encode($rslt['BBname'],0)[1];
$ifsc=xss_encode($rslt['ifsc'],0)[1];
$addinfo=xss_encode($rslt['addinfo'],0)[1];
echo "<tr>";
echo "<td><?php echo $name; ?></td>";
echo "<td><?php echo $email; ?></td>";
echo "<td><?php echo $dob; ?></td>";
echo "<td><?php echo $category; ?></td>";
echo "<td><?php echo $isbn; ?></td>";
echo "<td><?php echo $Fname; ?></td>";
echo "<td><?php echo $Mname; ?></td>";
echo "<td><?php echo $Gname; ?></td>";
echo "<td><?php echo $Cno; ?></td>";
echo "<td><?php echo $income; ?></td>";
echo "<td><?php echo $pre_add; ?></td>";
echo "<td><?php echo $per_add; ?></td>";
echo "<td><?php echo $degree; ?></td>";
echo "<td><?php echo $institute; ?></td>";
echo "<td><?php echo $Bname; ?></td>";
echo "<td><?php echo $Ano; ?></td>";
echo "<td><?php echo $Hname; ?></td>";
echo "<td><?php echo $BBname; ?></td>";
echo "<td><?php echo $ifsc; ?></td>";
echo "<td><?php echo $addinfo; ?></td>";
echo "</tr>";
}
echo "</table";
?>
</body>
</html>