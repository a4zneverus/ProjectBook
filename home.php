<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bettermoon Cafe'</title>
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <style>
		.text{
		margin: auto;
	font-size: 45px;
	padding-left: 45%;
  }
  .fullscreen-long{
       margin: auto;
    font-size: 16px;
    padding-top: 3%;
	}
	.wa{
  background-color:#FFFFFF;
  border-radius: 4px;
    width:350px;
  border-style: solid;
border-color:#D2B48C;
font-size: 12px;
padding: 8px;
}
.abc{
  background-color:#FFFFFF;
  border-radius: 4px;
  width: 150px;
  border-style: solid;
  border-color:#3385ff;
  text-align: center;
  font-size: 12px;
  padding: 8px;
  cursor: pointer;
}
.ss{
	padding-left: 70%;
}
body {
    -webkit-animation: colorchange 40s infinite;
    animation: colorchange 40s infinite;
}


@-webkit-keyframes colorchange {

     0%  {background: #ffd9cc;}
    25%  {background: #ccffd9;}
    50%  {background: #ffd9cc;}
    75%  {background: #ccffd9;}
    100% {background: #ffd9cc;}
}


@keyframes colorchange {
     0%  {background: #ffd9cc;}
    25%  {background: #ccffd9;}
    50%  {background: #ffd9cc;}
    75%  {background: #ccffd9;}
    100% {background: #ffd9cc;}
}

@font-face {
    font-family: Helvetica;
    src: url('https://www.fontsquirrel.com/fonts/kaushan-script.ttf');
}



  </style>
  <body>

	<form name="form1" method="post" action="check_login.php">

		<div align="left"><img src="" width="12%"></div>
		<div align="center"><img src="img/LOGIN_logo.png" width="20%"></div>

	<table class="fullscreen-long" border="0" style="width: 300px" align="center">
	<tr>
		<td> &nbsp;Username<br><br>
		<input name="txtUsername" class="wa" type="text" id="txtUsername" placeholder="Username" required="required"><br><br></td>
	</tr>
	<tr>
		<td> &nbsp;Password<br><br>
		<input name="txtPassword" class="wa" type="password" id="txtPassword" placeholder="Username" required="required"><br><br></td>
	</tr>
	</table>
		<center>
			<br><br><input type="submit" name="Submit" class="abc" value="Login"><br></center>
		<table class="ss">
			<td><a href="addprofile.php">Register</a>&nbsp;&nbsp;</td>
			<td><a href="..">Forget</a></td>
		</table>
</form>
</body>
</html>
