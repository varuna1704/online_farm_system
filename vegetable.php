<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="Utf-8">
<title>ONLINE STYSTEM FOR FAMR</title>
<?php
//include "header.php";
include 'header_back.php';
?>
<style>
    body{
        background-color:#C0C0C0; 
    }
.box1{
   width:320px;
   height:300px;
   padding:10px;
   border:2px solid #333;
   background:url("v1.jpeg")20% 30%;
   }
   .box2{
   width:320px;
   height:300px;
   padding:10px;
   border:2px solid #333;
   background:url("v2.jpeg");
   }
   .box3{
   width:320px;
   height:300px;
   padding:10px;
   border:2px solid #333;
   background:url("v3.jpeg")40% 60%;
   }
   .clip1{
	   background-clip:padding-box;
   }
   h1{
          text-align: center;
   }
   td{
	   text-align:center;
	   padding: 10px 40px;
   }
   </style>
   </head>
   <body>
       <h1>VEGETABLE</h3>
       <table><tr><td><h2>LADYFINGER</h2></td><td><h2>POTATO</h2></td><td><h2>COLIFLOWER</h2></td>
       </tr><!-- comment -->
       <tr>
           <td>    
   <a href="v1ladyfinger.php"><div class="box1 clip1" ></div></a></td>
           <td>
   <a href="v2potato.php"><div class="box2 clip1"></div></a></td>
           <td>
   <a href="v3califlower.php"><div class="box3 clip1"></div></a><td></tr>
       <tr></td>
       <tr></tr>
       <tr></tr>
   </table>
   </body>
  </html>
  <?php
include "footer.php";
?>