<?php 
require_once("maxProtector.class.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Table View</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css" />

<style>
.paginate {
font-family:Arial, Helvetica, sans-serif;
	padding: 3px;
	margin: 3px;
}

.paginate a {
	padding:2px 5px 2px 5px;
	margin:2px;
	border:1px solid #999;
	text-decoration:none;
	color: #666;
}
.paginate a:hover, .paginate a:active {
	border: 1px solid #999;
	color: #000;
}
.paginate span.current {
    margin: 2px;
	padding: 2px 5px 2px 5px;
		border: 1px solid #999;
		
		font-weight: bold;
		background-color: #999;
		color: #FFF;
	}
	.paginate span.disabled {
		padding:2px 5px 2px 5px;
		margin:2px;
		border:1px solid #eee;
		color:#DDD;
	}
	
	
		
	
</style>
</head>

<body style="background-image:url(background.jpg)">
<script type="text/javascript">
function green()
{
window.location.href = 'short.php';
}
function yellow()
{
window.location.href = 'wait.php';
}
function red()
{
window.location.href = 'rej.php';
}
function black()
{
window.location.href = 'results.php';
}
function brown()
{
window.location.href= 'incom.php';
}
</script>

<center> <img style="margin-top:0px;" src="../images/header1.png" width="1000" height="100" margin="0px" usemap="#map"/> 
				<map name="map">
					<area shape="rect" coords="0,0,150,100" href="index.php" />
				</map>
	 </center>

<?php
	include('connect.php');	

	$tableName="bnsatucr_details";		
	$targetpage = "wait.php"; 	
	$limit = 25; 
	
	$query = "SELECT COUNT(*) as num FROM $tableName WHERE status='W'";
	$total_pages = mysql_fetch_array(mysql_query($query));
	$total_pages = $total_pages[num];
	
	$stages = 3;
	$page = mysql_escape_string($_GET['page']);
	if($page){
		$start = ($page - 1) * $limit; 
	}else{
		$start = 0;	
		}	
	
    // Get page data
	$query1 = "SELECT * FROM $tableName WHERE status='W' ORDER BY income LIMIT $start, $limit";
	$result = mysql_query($query1);
	
	// Initial page num setup
	if ($page == 0){$page = 1;}
	$prev = $page - 1;	
	$next = $page + 1;							
	$lastpage = ceil($total_pages/$limit);		
	$LastPagem1 = $lastpage - 1;					
	
	
	$paginate = '';
	if($lastpage > 1)
	{	
	

	
	
		$paginate .= "<div class='paginate'>";
		// Previous
		if ($page > 1){
			$paginate.= "<a href='$targetpage?page=$prev'>previous</a>";
		}else{
			$paginate.= "<span class='disabled'>previous</span>";	}
			

		
		// Pages	
		if ($lastpage < 7 + ($stages * 2))	// Not enough pages to breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page){
					$paginate.= "<span class='current'>$counter</span>";
				}else{
					$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
			}
		}
		elseif($lastpage > 5 + ($stages * 2))	// Enough pages to hide a few?
		{
			// Beginning only hide later pages
			if($page < 1 + ($stages * 2))		
			{
				for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
				$paginate.= "...";
				$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
				$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
			}
			// Middle hide some front and some back
			elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
			{
				$paginate.= "<a href='$targetpage?page=1'>1</a>";
				$paginate.= "<a href='$targetpage?page=2'>2</a>";
				$paginate.= "...";
				for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
				$paginate.= "...";
				$paginate.= "<a href='$targetpage?page=$LastPagem1'>$LastPagem1</a>";
				$paginate.= "<a href='$targetpage?page=$lastpage'>$lastpage</a>";		
			}
			// End only hide early pages
			else
			{
				$paginate.= "<a href='$targetpage?page=1'>1</a>";
				$paginate.= "<a href='$targetpage?page=2'>2</a>";
				$paginate.= "...";
				for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page){
						$paginate.= "<span class='current'>$counter</span>";
					}else{
						$paginate.= "<a href='$targetpage?page=$counter'>$counter</a>";}					
				}
			}
		}
					
				// Next
		if ($page < $counter - 1){ 
			$paginate.= "<a href='$targetpage?page=$next'>next</a>";
		}else{
			$paginate.= "<span class='disabled'>next</span>";
			}
			
		$paginate.= "</div>";		
	
	
}
 echo $total_pages.' Results';
 // pagination
 echo $paginate;
?>

<?php
echo '<form action="db2.php" method="POST">';
echo '<h3>Waitlisted Candidates:-</h3>';
echo '<br>';
echo '<table border="1px" class="table table-striped" style="margin-left:10px;margin-top:10px;font-family:calibri;font-size:12px;background-color:white">';
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
echo "<th><b>Date</b></th>";
echo "<th><b>Status</b></th>";
echo "</tr>";
$i=0;
$ij=0;
$emailss="email";
$statuss="status";
$namess="name";
while($rslt = mysql_fetch_array($result))
{
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
$date=htmlspecialchars($rslt['date']);
$ij++;
$em=$emailss.$ij;
echo "<tr>";
?>
<td><input type="text" name="<?php echo $namess.$ij; ?>" value="<?php echo $name; ?>" readonly></td>
<td><input type="text" name="<?php echo $em; ?>" value="<?php echo $email; ?>" readonly></td>
<?php
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
echo "<td>$date</td>";
?>
<td><input type="radio" name="<?php echo $statuss.$ij ?>" value="S">Shortlist<br>
<input type="radio" name="<?php echo $statuss.$ij ?>" value="W" checked>Waitlist<br>
<input type="radio" name="<?php echo $statuss.$ij ?>" value="R">Reject
<?php
echo "</tr>";
}

echo "<tr>";
echo '<td colspan="2"><input type="submit" value="update and email"></td>'; 
echo '<td colspan="2"><input type="button" value="Shortlisted Candidates" onclick="green()"></td>'; 
echo '<td colspan="2"><input type="button" value="Waitlisted Candidates" onclick="yellow()"></td>';
echo '<td colspan="2"><input type="button" value="Rejected Candidates" onclick="red()"></td>';
echo '<td colspan="2"><input type="button" value="Not Updated" onclick="black()"></td>';
echo '<td colspan="2"><input type="button" value="Incomplete Applications" onclick="brown()"></td>';
echo "</tr>";
echo "</table";

echo "</form>";
?>



	
    
    
    
   

</body>
</html>
    
    