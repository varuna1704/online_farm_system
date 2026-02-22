<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style> 
   
     body{
        background-color:#C0C0C0; 
    }
   
    .navbar{
 background-color:black;
 border-radius:150px;
 }
 .navbar a{
     display:block;
     text-decoration:none;
     color:red;
 }
 .navbar ul{
  margin:10px 10px;
  overflow:auto;
  }
  .navbar li{
  font-size:15px;
  font-weight:bold;
  font-family:verdana;
  margin-left:10px;
  text-align:center;
  width:135px;
   float:left;
   list-style:none;
   margin:20px 0px;
   
   }
   .navbar li a
   {
        padding:3px 3px;
	text-decoration:none;
	color:white;
	}
	.navbar li a:hover
	{
	 color:red;
	 }
        li ul
         {
             
             display: block;
             text-decoration: underline;
         }
	 .search{
	  float:right;
	  color:white;
	  padding:10px 70px;
	  }
	  .navbar input{
	   border:10px solid black;
	   border-radius:14px;
	   padding:0px 1px;
	   width:150px;
	   }
	   .table{
		   margin-top:20px;
		   }
	   h2{
	   margin-left:500px;}
	   p{
		padding:90px;
		display:inline;
	        width:20px;  
           }  
             .footer{
               text-align:center;
                padding:4px;
               margin-top:10px;
               width:100%;
               height:40px;
               border-radius:30px;
              background-color:#000000;
       color:white;
        font-size:30px;
       font-family:Agency FB;
       text-decoration:underline;

	   margin-top:50px;
	   }
 
	  
		

</style>
</head>
<body>
<header>
<nav class="navbar">
<ul>
  <li><a href="homepage">HOME</a></li>
  <li><a href="agroinfo.php">AGRO INFO</a></li>
  <li><a href="about_us.php">ABOUT US</a></li>
  <li><a href="contact_us.php">CONTACT</a></li>
  <li><a href="help.php">HELP</a></li>

  <div class="search">
 <input type="text" name="search" id="search" placeholder="search this website">
      </div>
</ul>
</nav>

    </header>
 <div class="table">
     
     
     
 <h2>INFORMATION</h2>
 <p align="justify"> The Online System for farm Provides its researchers to get online information about farming. 
     It provides the various kind of Agri related information and Agri services in the website. the main features of the web-based system includes statistical information about fertilizers, 
     land type, diseases and suitable material for the crops.
     This web system is mainly solve the problems of farmers to grow quality crops or products are provided to the farmer, Any new farmer can understand which crops are grow on
     which seasons and which type of fertilizers are provided to the particular crops.
     So this system help to the present farming process and to provide knowledge about resent agriculture issue.                                        
 </p><h4></div>
<div class="table"></div><td>
    <!--
<tr><td><img src="h3.jpeg" width=420 height=320/></td>
<td><img src="h2.jpeg" width=410 height=320/></td>
<td><img src="h1.jpeg" width=420 height=320/></td>
</tr>
    -->
    <?php
include "con_pg.php";
 $query="SELECT * FROM home";
$res=pg_query($con, $query) or die (pg_last_error($con)); 
echo "<table cellspacing=2>";
//echo "<tr><td>pno</td><td>pname</td><td></td></tr>";

echo"<tr><td>";
while($row=pg_fetch_array($res))
{

//echo "<td>".$row[0]."</td>";
//echo "<td>".$row[1]."</td>";
$row[2]= pg_fetch_result ($res, 'photo');
$unes_image=pg_unescape_bytea ($row[2]);
echo" <img src=$unes_image width=410 height=300/>";
} 
echo"</td></tr>";
echo "</table>";
pg_close($con);
?>


<?php
include "footer.php";
?>

</body></html>