<?php
include "header.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="style_login.css"/>
</head>
<body>
    
    
    
<?php
require('con_pg.php');
session_start();

if(isset($_POST['user_name']))
{
$user_name=stripslashes($_REQUEST['user_name']);
$user_name=pg_escape_string($con,$user_name);
$user_pass=stripslashes($_REQUEST['user_pass']);
$user_pass=pg_escape_string($con,$user_pass);

$query="SELECT * FROM users WHERE user_name='$user_name' and user_pass='$user_pass'";
$result=pg_query($con,$query) or die(pg_last_error($con));
$rows=pg_num_rows($result);

if($rows==1)
{
$_SESSION['user_name']=$user_name;
header("location:welcome.php");
}
else
{
echo "<div class='form'>
    <h3>username/password is incorrect</h3>
<br>click here<a href='user_login.php'>login</a><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>";
}
}


else{
?>
<div class="form">
<form action="" method="POST" name="login">
<table>
<td colspan="2" align="center" ><div class="circle"><!--<h1>login</h1>--></div></td></tr>
<tr>
<td>&nbsp username </td><td><input type="text" name="user_name" placeholder="&nbsp username" required/></td>
</tr>
<tr>
<td>&nbsp password </td>
<td><input type="password" name="user_pass" placeholder="&nbsp password" required/></td></tr>

<td colspan="2" align="center" ><input type="submit" name="submit" value="Login"/></td>
</tr>
<tr><td colspan="2" align="center" ><p>not registered yet?
<a href='user_reg.php'>Register Here</a>
</table>
</form>

</div>
<?php
}
include "footer.php";
?></body>
</html>
 
