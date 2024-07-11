<?php
$name1=$_POST['name1'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$feed=$_POST['feed'];
$conn= mysqli_connect("localhost","id21696451_satheeshbaabu","Tata_2021","id21696451_first");
$sql="INSERT INTO feedback(name1,mobile_number,email,messageq) values('$name1','$mobile','$email','$feed')";
$r=mysqli_query($conn,$sql);
if($r)
{
    // echo "Sent successfully";
    header("Location: ./index.html");
}
else
{
    echo "Error";
}
?>