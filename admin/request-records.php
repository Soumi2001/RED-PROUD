<?php 
session_start();
//error_reporting(0);
session_regenerate_id(true);
include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
	{	
	header("Location: index.php"); //
	}
	else{?>
<table border="1">
	<thead>
		<tr>
      <th>S.No</th>
      <th>Name of Donar</th>
      <th>Conatact Number of Donar</th>
      <th>Name of Requirer</th>
      <th>Mobile Number of Requirer</th>
      <th>Email of Requirer</th>
      <th>Blood Require For</th>
      <th>Message of Requirer</th>
      <th>Apply Date</th>
		</tr>
	</thead>

<?php 
$filename="Blood Request list";
$sql="SELECT tblbloodrequirer.BloodDonarID,tblbloodrequirer.name,tblbloodrequirer.EmailId,tblbloodrequirer.ContactNumber,tblbloodrequirer.BloodRequirefor,tblbloodrequirer.Message,tblbloodrequirer.ApplyDate,tblblooddonars.id as donid,tblblooddonars.FullName,tblblooddonars.MobileNumber from  tblbloodrequirer join tblblooddonars on tblblooddonars.id=tblbloodrequirer.BloodDonarID ";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{				
echo '  
<tr>  
<td>'.$cnt.'</td> 
<td>'.$row->FullName.'</td> 
<td>'.$row->MobileNumber.'</td> 
<td>'.$row->name.'</td> 
<td>'.$row->ContactNumber.'</td> 
<td>'.$row->EmailId.'</td> 
<td>'.$row->BloodRequirefor.'</td>	
<td>'.$row->Message.'</td>	 
<td>'.$row->ApplyDate.'</td>		 					
</tr>  
';
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=".$filename."-report.xls");
header("Pragma: no-cache");
header("Expires: 0");
$cnt++;
}
}
?>
</table>
<?php } ?>