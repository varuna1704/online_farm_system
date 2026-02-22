<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="Utf-8">
<title>ONLINE STYSTEM FOR FAMR</title>
<?php
include 'header_back.php';
//include "header.php";
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
   background:url("f1.jpeg")10% 10%;
   }
   .box2{
   width:320px;
   height:300px;
   padding:10px;
   border:2px solid #333;
   background:url("f2.jpeg")10%;
   }
   .box3{
   width:320px;
   height:300px;
   padding:10px;
   border:2px solid #333;
   background:url("f3.jpeg")20% 30%;
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
       <h1>FRUIT</h3>
       <table><tr><td><h2>MANGO</h2></td><td><h2>GUAVA</h2></td><td><h2>GRAPE</h2></td>
       </tr><!-- comment -->
       <tr>
           <td>    
   <a href="f1.php"><div class="box1 clip1" ></div></a></td>
           <td>
   <a href="f2.php"><div class="box2 clip1"></div></a></td>
           <td>
   <a href="f3.php"><div class="box3 clip1"></div></a><td></tr>
       <tr></td>
       <tr></tr>
       <tr></tr>
   </table>
   </body>
  </html>
  <?php
include "footer.php";
?>