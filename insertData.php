<?php
 

$conn = mysqli_connect("localhost","root",""); 
if($conn)
echo "Connected to database!!!"; 
else
echo "Failed to Connect:".mysqli_error();
mysqli_select_db($conn,"22") or die("No Database existing:".mysqli_error()); 
if(isset($_REQUEST['uname']))
{
 
$uname=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];
$email=$_REQUEST['email'];
$phno=(float)$_REQUEST['phone'];
$query = "INSERT INTO registration VALUES('$uname','$pass','$email','$phno')";
mysqli_query($conn,$query);
$result = mysqli_query($conn,"select * from registration");
?>
<html>
<body>
<br/><br/><br/>
<p align="right"><a href="registration.html">[Registration Page]</a></p>
<center>
<font face="verdana" size="4">
<table border="1" cellpadding="0" cellspacing="0">
<tr>
 

</tr>
<tr>
 



<th> S.No.</th>
<th>	User Name</th>
<th>	Email</th>
<th>Phone</th>
 
</tr>
<?php $num=1; while($row = mysqli_fetch_array($result))
{ ?>
<tr>
<td><?php echo $num++; ?> </td>
<td><?php echo $row['uname']; ?> </td>
<td><?php echo $row['email']; ?> </td>
 





</body>
</html>
 
<td><?php echo $row['phno']; ?> </td>
</tr>
<?php }?>
</table>
</center>
 
<?php } ?>
