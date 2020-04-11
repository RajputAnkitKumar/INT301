<?php
include"connection.php";
if(isset($_POST['a']))
{
if(mysqli_query($conn,"insert into quiz(name,email,score) values('".$_POST['a']."','".$_POST['b']."',0)"))
{
echo'Registered Successfully<br><br>Re-directing...';
session_start();
$_SESSION['quiz']=$_POST['b'];
}
else
{
echo'Failed To Register';
}
}
if(isset($_POST['skill']))
{
	session_start();
	$skill=$_POST['skill'];
	$select="select * from skill where skill like '%$skill%'";
	$query=mysqli_query($conn,$select);
	if(mysqli_num_rows($query)==1)
	{
$row=mysqli_fetch_assoc($query);
if(mysqli_query($conn,"update register set job_profile='".$row['job_role']."' where contact='".$_SESSION['skill']."'"))
{
echo'
<img src="tick2.png" width="100px"><br><br>
<label style="color:#68cf38;font-weight:800;font-size:22px">You Have Successfully Registered For<br>'.strtoupper($row['job_role']).'</label>';
}
else
{
	echo'<label style="color:black">Failed To Register.</label>';
}	
}
else
{
	echo'<label style="color:black">OOPS!, NO RESULT FOUND.</label>';
}
}
?>