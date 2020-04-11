<?php 
include"popup.php";
include"alert.php";
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
</style>
</head>
<body>
<center>
	<div style="text-align:left;width:400px;margin-top:70px;background-color:white;box-shadow:0 0 10px grey;border-radius:5px;margin-right:50px">
<center>
  <img src="quiz.jpg" width="400px" style="border-radius:5px 5px 0 0">
<form>
<label style="color:#333;font-size:25px;float:left;margin-top:10px;">  &nbsp &nbspFill Your Details &nbsp </label></center><br>
<div style="width:auto;border-top:1px solid silver;margin-top:10px"></div><br>
<input type="text" name="a" placeholder="Your Full Name" minlength="3" maxlength="30" required><br><br>
<input type="email" placeholder="Email Address" maxlength="30" minlength="2" name="b" required><br><br>
<br>
<center><input style="background-color:#193f63" type="submit" value="Start Quiz"><br><br><br>
</form></center>
</div>
</center>
<script>
      $(function () {

        $('form').on('submit', function (e) {
          e.preventDefault();
          $('.loader').show();
          $.ajax({
            type: 'post',
            url: 'user-db.php',
            data: $('form').serialize(),
            success: function (data) {
            $('.loader').hide();
            $('#live').fadeIn('slow');
            $('#live').html(data);
            setTimeout(function(){
            $('#live').fadeOut('slow');
            location.href='quiz.php';
            },2000);
            }
          });

        });

      });
    </script>
</body>
</html>