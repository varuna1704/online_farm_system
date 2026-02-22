<?php
//include "user_header.php";
?>
<?php
include "header.php";
?>

<!DOCTYPE html>
<html>
   <title>Registration</title>
<head rel="stylesheet" href="css/btn_reg.css"/><!-- comment -->
<style>
    body{
        background-color:#C0C0C0;
    }
   
    h1{
        text-align:center; 
    }
    table 
    {
       width:95%;
       margin-top:90px; 
       margin-left:30px; 
        text-align:center; 
       border:3px solid black;
        background:#C0C0C0;
       
    }
    td{
       text-align: left;
    }
  input[type='submit']
    {
        
       font-family: 'Source Sans Pro', sans-serif;
    border: none;
    font-size:16px;
     cursor: pointer;
    padding: 10px 24px;
    display: inline-block;
   text-transform: capitalize;
   letter-spacing: 0px;
   font-weight: 400;
   outline: none;
  position: relative; -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s; transition: all 0.3s;
  border-radius: 5px;
  -webkit-border-radius: 5px; rder-radius: 5px;
   o-border-radius: 5px;
   
    }
 input[type='submit']:hover
      {
          box-shadow: 0 4px #B41D1D;
-webkit-box-shadow: 0 4px #B41D1D;
-moz-box-shadow: 0 4px #B41D1D;
-o-box-shadow: 0 4px #B41D1D;
top: 0px;

item-align:center;
      }
 input[type='submit']:active {
box-shadow: 0 0 #ab3c3c;
-webkit-box-shadow: 0 0 #ab3c3c;
-moz-box-shadow: 0 0 #ab3c3c;
-o-box-shadow: 0 0 #ab3c3c;
top: 4px;
}

  input[type='text'],input[type='password']
  {
      padding: 5px 25px;
      width:150px;
  }
  input[type='radio']
  {
      width:30px;
  }

</style>
</head>  
</html>  


<?php
require('con_pg.php');

if(isset($_REQUEST['user_name']))
{
	$user_name=stripslashes($_REQUEST['user_name']);
	$user_name=pg_escape_string($con,$user_name);
	$user_email=stripslashes($_REQUEST['user_email']);
	$user_email=pg_escape_string($con,$user_email);
	$user_age=stripslashes($_REQUEST['user_age']);
	$user_age=pg_escape_string($con,$user_age);
	$user_gender=stripslashes($_REQUEST['user_gender']);
	$user_gender=pg_escape_string($con,$user_gender);
	$user_pass=stripslashes($_REQUEST['user_pass']);
	$user_pass=pg_escape_string($con,$user_pass);
	$conf_pass=stripslashes($_REQUEST['conf_pass']);
	
	$contact_no=stripslashes($_REQUEST['contact_no']);
	$contact_no=pg_escape_string($con,$contact_no);
	$user_add=stripslashes($_REQUEST['user_add']);
	$user_add=pg_escape_string($con,$user_add);
        $user_adhar=stripslashes($_REQUEST['user_adhar']);
	$user_adhar=pg_escape_string($con,$user_adhar);
        $user_bankname=stripslashes($_REQUEST['user_bankname']);
	$user_bankname=pg_escape_string($con,$user_bankname);
        $user_bankno=stripslashes($_REQUEST['user_bankno']);
	$user_bankno=pg_escape_string($con,$user_bankno);
        $user_farmarea=stripslashes($_REQUEST['user_farmarea']);
	$user_farmarea=pg_escape_string($con,$user_farmarea);
        $u_s_type=stripslashes($_REQUEST['$u_s_type']);
	$u_s_type=pg_escape_string($con,$u_s_type);


	if($user_pass==$conf_pass)
	{
	$query="INSERT into users(user_name,user_pass,user_email,user_age,user_gender,contact_no,user_add,user_adhar,user_bankname,user_bankno,user_farmarea,u_s_type) VALUES ('$user_name','$user_pass','$user_email','$user_age','$user_gender','$contact_no','$user_add','$user_adhar','$user_bankname','$user_bankno','$user_farmarea','$u_s_type')";
	$result=pg_query($con,$query);
	if($result)
	{
		echo"<div class='form'><h3>you are registered successfully</h3>
		<br>click here to <a href='user_login.php'>login</a></div>";
	}	
	}
}


else
{
	?>
	<div class="form">
	<form name="registration" action="" method="POST">
	<table>
            <tr><td colspan="2" align="center" ><h1>Registration</h1></td></tr>
	<tr><td>&nbsp User Name </td>
	<td><input type="text" name="user_name" placeholder="username" required/></td>
	<td>&nbsp first Name </td>
	<td><input type="text" name="fname" placeholder="first name" required/></td>
	<td>&nbsp Last Name </td>
	<td><input type="text" name="lname" placeholder="Last name" required/></td></tr>
	
	<tr>
	<td>&nbsp Email </td>
	<td><input type="email" name="user_email" placeholder="email" required/></td>
	<td>&nbsp Age</td>
	<td><input type="number" name="user_age" placeholder="age" required/></td>
	<td>&nbsp Gender</td>
	<td><select name="user_gender" id="user_gender"> 
	                            <option value="female">Female</option>
				<option value="male">Male</option></select></td></tr>
        
	<tr>
	<td>&nbsp Password </td>
	<td><input type="password" name="user_pass" placeholder="password" required/></td>
	<td>&nbsp confirm Password </td>
	<td><input type="text" name="conf_pass" placeholder="confirm password" required/></td>
	<td>&nbsp contact no</td>
	<td><input type="text" name="contact_no" placeholder="contact no" required/></td></tr>
        
	<tr><td>&nbsp Address</td>
        <td><input type="textarea" name="user_add" placeholder="Address " required/></td>
        <td>&nbsp adhar no</td>
         <td><input type="text" name="user_adhar" placeholder="adhar no" required/></td>
       <td>&nbsp bank name</td>
       <td><input type="text" name="user_bankname" placeholder="bank name" required/></td></tr>
       
       <tr><td>&nbsp bank no</td>
       <td><input type="text" name="user_bankno" placeholder="bank no" required/></td>
        <td>&nbsp Farm Area</td>
       <td><input type="text" name="user_farmarea" placeholder=" Faram Area" required/></td>
       <td>&nbsp Soil Type</td>
       <td><input type="text" name="u_s_type" placeholder=" Soil Type" required/></td></tr>


        <tr>
	<td>&nbsp City </td>
	<td><input type="text" name="user_city" placeholder="City" required/></td>
        </tr>
        	
	<tr><td>&nbsp State</td>
	<td><select name="user_state" id="user_state">
	                           <option value="#">select state</option>
	                                <option value="andhra_pradhesh">Andhra Pradhesh</option>
	                                <option value="maharashtra">Maharashtra</option>
					                <option value="gujrat">Gujrat</option>
									<option value="rajasthan">Rajasthan</option>
									<option value="haryana">Haryana</option>
									</select>
									</td></tr>
	
	<tr>
	<td colspan="2" align="center" >
	<input type="submit" name="submit" value="register" />
	</td></tr>
	<tr><td>&nbsp </td></tr>
	</table>
	</form>
	</div>
	<?php
}
?>
</body>
</html>

<?php
include "footer.php";
?>