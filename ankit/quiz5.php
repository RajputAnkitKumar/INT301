<?php
session_start();
if(isset($_SESSION['quiz'])&&$_SESSION['quiz']!='')
{
?>



<?php 
include"popup.php";
include"alert.php";
include"connection.php";
?>
<html>
<head>
<title>
Quiz
</title>
<style type="text/css">
body
{
	font-family: sans-serif;
background-color: silver;
}
div
{
	color: #333;
	font-size: 18px;
	font-weight: 600;

}
input[type="text"],input[type="email"],select
{
	width: 90%;
	padding: 10px;
	border-radius: 4px;
	border: none;
  font-weight: 500;
  color: #333;
  border: 1px solid silver;
	font-size: 17px;
  margin: 0 20px 0 20px;
}
input[type="submit"],input[type="reset"]
{
width: 120px;
text-align: center;
border: none;
font-weight: 600;
border-radius: 4px;
padding: 8px;
color: white;
font-size: 17px;
box-shadow: 0 2px 7px black;
}
#under div
{
	width: 368px;
	padding: 15px 10px 15px 10px;
	background-color: #e9edf2;
	margin-left: 15px;
	border-radius: 5px;
	margin-bottom: -15px;
	vertical-align: middle;
}
input[type=radio] {
    border: 0px;
    height: 1.5em;
    width:20px;
    margin-right: 10px;
    vertical-align: bottom;
}
label
{
cursor: pointer;	
color: #5d6c80;
line-height:30px;
}
</style>
</head>
<body>
<center>
	<div id="disable" style="text-align:left;width:420px;margin-top:50px;background-color:white;box-shadow:0 0 10px grey;border-radius:5px;margin-right:50px">
<center>
  <img src="quiz.jpg" width="420px" style="border-radius:5px 5px 0 0">
<form>
	<?php
	$fetch="select * from question where id=5";
	$query=mysqli_query($conn,$fetch);
     $row=mysqli_fetch_assoc($query);
     
     ?>
</center>
<div style="color:#444;width:400px;font-size:24px;margin-top:15px;margin-left:10px;overflow-wrap:break-word;">1. <?php echo $row['ques'];?></div><br>
<div id="under" style="width:auto;border-top:1px solid silver;">
	<br>
<div class="<?php echo str_replace(' ', '', $row['opt1']);?>"><label  class="<?php echo str_replace(' ', '', $row['opt1']);?>l" for="a"><input onclick="quiz(this.value)" value="<?php echo $row['opt1'];?>" type="radio" name="a" id="a">
<?php echo $row['opt1'];?></label>
</div>
<br>
<div class="<?php echo str_replace(' ', '', $row['opt2']);?>"><label  class="<?php echo str_replace(' ', '', $row['opt2']);?>l" for="b"><input onclick="quiz(this.value)" value="<?php echo $row['opt2'];?>" type="radio" name="a" id="b">
<?php echo $row['opt2'];?></label></div>
<br>
<div class="<?php echo str_replace(' ', '', $row['opt3']);?>"><label  class="<?php echo str_replace(' ', '', $row['opt3']);?>l" for="c"><input onclick="quiz(this.value)" value="<?php echo $row['opt3'];?>" type="radio" name="a" id="c">
<?php echo $row['opt3'];?></label></div>
<br>
<div class="<?php echo str_replace(' ', '', $row['opt4']);?>"><label  class="<?php echo str_replace(' ', '', $row['opt4']);?>l" for="d"><input onclick="quiz(this.value)" value="<?php echo $row['opt4'];?>" type="radio" name="a" id="d">
<?php echo $row['opt4'];?></label></div>
</div><br>

<br>
</form>
</div>
</center>
<script>
     function quiz(val) {
var ques=5;
          $('.loader').show();
          $.ajax({
            type: 'post',
            url: 'quiz-db.php',
            data: {val:val,ques:ques},
            success: function (data) {
            $('.loader').hide();
            if(data=='Wrong Answer!')
            {
             $('.'+val.split(/\s/).join('')).css('background-color','#fcece8');
             $('.'+val.split(/\s/).join('')+'l').css('color','#b5482d');
           /*  $('#disable').css('opacity','0.6');*/
             $('#disable').css('pointer-events','none');
            }
            else
            {
             $('.'+val.split(/\s/).join('')).css('background-color','#cdebb7');
             $('.'+val.split(/\s/).join('')+'l').css('color','#6eab41');
            }
            $('#live').fadeIn('slow');
            $('#live').html(data);
            }
          });
}
    </script>
</body>
</html>







<?php
}
else
{
session_destroy();
echo"<script>location.href='./'</script>";
}
?>