<?php
include("connection.php");
$name1=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql="INSERT INTO contact(username,email,messages)VALUES('$name1','$email','$message')";
$result=mysqli_Query($con,$sql);
if($result)
{
    echo '<script>alert("message sent successfully") </script>';
    echo '<script> window.location.href="contactpage.php"</script>';
}
?>