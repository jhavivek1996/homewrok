<?php
if (isset($_REQUEST['submit']))
{

	$first=$_REQUEST['first'];
	$last=$_REQUEST['last'];
	$radio=isset($_REQUEST['radio'])?$_REQUEST['radio']:null;
	$checkbox=isset($_REQUEST['checkbox'])?$_REQUEST['checkbox']:null;
	if(empty($first))
	{
		echo "Please input first name";
	}
	if(empty($last))
	{
		echo "Please input last name";
	}
	if($last==null)
	{
		echo "Please fill it";
	}
	if($checkbox==null)
	{
		echo "Please fill it";
	}




}






?>



<!DOCTYPE html>
<html>
<head>
	<title>PHP Form Validation</title>
</head>
<body>


	<body>


<form method="GET" name="registrationform" id="registrationform">
	<table>
		<tr><td>First name</td><td><input type="text" id="first" name="first"></td></tr>
		<tr><td>Last name</td><td><input type="text" id="last" name="last"></td></tr>
		<tr><td>Email</td><td><input type="email" id="email" name="email"></td></tr>
		<tr><td>Phone Number</td><td><input type="text" id="phone" name="phone"></td></tr>
		<tr><td>Password</td><td><input type="password" id="password" name="password"></td></tr>
		<tr><td>Confirm Password</td><td><input type="password" id="cpassword" name="cpassword"></td></tr>
		<tr><td>Gender</td>
		<tr><td>&nbsp;</td>
		<td>Male<input type="radio" name="radio" id="radio" value="male"></input></td>
		<td>Female<input type="radio" name="radio" id="radio" value="female"></td>
		<td>Other<input type="radio" name="radio" id="radio" value="other"></td>
		</tr>
		<tr><td>Favourite Sports</td>
		<tr><td>&nbsp;</td>
		<td>Cricket<input type="checkbox" name="checkbox"   value="Cricket"></input></td>
		<td>Volleyball<input type="checkbox" name="checkbox"   value="Volleyball"></td>
		<td>Chess<input type="checkbox" name="checkbox"  value="Chess"></td>
		<tr><td>&nbsp;</td><td><input type="submit" id="submit" name="submit"></td></tr>
	</table>
</form>




</body>
</html>

</body>
</html>