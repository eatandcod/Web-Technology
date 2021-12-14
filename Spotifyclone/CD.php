<html> 
  <head> 
  <title> Database Creation </title> 
  <style>
    table,th,td{
      border: 1px solid black;
      border-collapse: collapse;
      border-color: chocolate;
    }
    th,td{
      text-align: center;
      padding: 5px;
    }
    table tr:nth-child(even){
      background-color: bisque;
    }
    
  </style>
  </head> 
  <?php
$con = new mysqli("localhost","root","");


// If database is not already existing, then create one

if (!mysqli_select_db($con,"test3")){
	
// Create database
 mysqli_query($con,"CREATE DATABASE test3");
 print("Database created successfully. <br />");
 }	
   

   // Create table
   mysqli_select_db($con,"test3");
   $sql = "CREATE TABLE request(songname varchar(30), 
           singername varchar(30),major varchar(30))";
   
   // Execute query
   mysqli_query($con,$sql);
//}
//else {

    
		
   mysqli_select_db($con,"test3");
   $sql="INSERT INTO FEEDBACK (songname, singername, major) 
   VALUES ('$_POST[singername]','$_POST[songname]','$_POST[major]')";

   if (!mysqli_query($con,$sql)){
     die('Error executing the query');
   }
   
   
//}
mysqli_close($con);
?> 


<?php
  $con = mysqli_connect("localhost","root","");
  if (!$con){
    die('Could not connect to localhost'. mysqli_error());
  }
  mysqli_select_db($con,"test3");
  $result = mysqli_query($con,"SELECT * FROM request");
  mysqli_close($con);
?>
<table style="width: 100%;">

  <tr style="background-color: blue; color: white; font-weight: bold"> 
     
       <td> Song Name </td> <td>Singer Name</td> <td>Major</td>
        
  </tr>


         <?php
            // fetch each record in result set
            for ( $counter = 0; $row = mysqli_fetch_row( $result );$counter++ ) {
          print( "<tr>" );
		  
          foreach ( $row as $key => $value ) 
		      
              print( "<td>$value</td>" );
          print( "</tr>" );
      } // end for
   ?>
         <!-- end PHP script -->

       </table>
	   <br>
   <center> <a href="GatherData.html"> Back </a> </center>
 </body> 
</html>






