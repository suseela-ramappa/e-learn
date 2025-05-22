<?php
$con=mysqli_connect("localhost" ,"root" , "" ,"project" );
if($con)
{
   echo "database connected"."<br>";
}
else{
   echo "database not connected";
}
?>