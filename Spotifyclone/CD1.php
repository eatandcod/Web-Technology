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

if (!mysqli_select_db($con,"test4")){
	
// Create database
 mysqli_query($con,"CREATE DATABASE test4");
 print("Database created successfully. <br />");
 }	
   

   // Create table
   mysqli_select_db($con,"test4");
   $sql = "CREATE TABLE FEEDBACK( studentname varchar(30), 
           cohort varchar(30), Feedback varchar(100))";
   
   // Execute query
   mysqli_query($con,$sql);
//}
//else {
	
 
    
		
   mysqli_select_db($con,"test4");
   $sql="INSERT INTO FEEDBACK (studentname, cohort, Feedback) 
   VALUES ('$_POST[record]','$_POST[studentname]','$_POST[cohort]', '$_POST[Feedback]')";

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
  mysqli_select_db($con,"test4");
  $result = mysqli_query($con,"SELECT * FROM FEEDBACK");
  mysqli_close($con);
?>
<table style="width: 100%;">

  <tr style="background-color: chocolate; color: white; font-weight: bold"> 
     
     <td> Name </td> <td> Cohort</td> <td>Feedback</td>
        
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
   <center> <a href="contact.html"> Back </a> </center>
 </body> 
</html>




