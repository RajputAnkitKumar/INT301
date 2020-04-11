<?php
include"connection.php";
if(isset($_POST['val']))
{
$count=mysqli_num_rows(mysqli_query($conn,"select * from question where id='".$_POST['ques']."' and ans='".$_POST['val']."'"));
if($count==1)
{
	$x=$_POST['ques'];
}
else
{
	if($_POST['ques']==1)
	{
		$x=0;
	}
	else
	{
	    $x=$_POST['ques']-1;
    }
}
if($count==1)
{
	session_start();
	mysqli_query($conn,"update quiz set score='$x' where email='".$_SESSION['quiz']."'");
	
	if($_POST['ques']==5)
	{
		$row=mysqli_fetch_assoc(mysqli_query($conn,"select * from quiz where email='".$_SESSION['quiz']."' order by id desc"));
		$val=($row['score']/5)*100;
		echo'Congratulations!<br><br>You have scored '.$val.'%';
	}
	else
	{
		echo"Correct Answer";
	}
}
else
{

echo'Wrong Answer!';
session_start();
$row=mysqli_fetch_assoc(mysqli_query($conn,"select * from quiz where email='".$_SESSION['quiz']."' order by id desc"));
		$val=($row['score']/5)*100;
		echo'<br><br>You have scored '.$val.'%';
}
}
