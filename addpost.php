<?php


$con = mysqli_connect("localhost","root","","roomrent");
//

//$v1=$n=$Lo=$r=$no=$d=$ima="";
//$v1=$_POST['value'];
//$n=$_POST['name'];
//$Lo=$_POST['Locality'];
//$r=$_POST['rent'];
//$no=$_POST['mobile'];
//$d=$_POST['details'];
//$ima=$_POST['browse image'];

$sql="INSERT INTO addpost(Ownername,Protype,Contact,Location,Rent,Images,Description) 
VALUES 
('$_POST[name]','$_POST[value]','$_POST[mobile]','$_POST[Locality]','$_POST[rent]','$_POST[image]','$_POST[details]')";
$query=mysqli_query($sql);
if($query)
{
	header("Location: RoomOnRent.html");

}
else
{
	echo 'MYSQL ERROR:'.mysql_error($con);

}
mysql_close($con);

?>