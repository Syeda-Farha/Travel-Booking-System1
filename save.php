<?php
include('db.php');
function createRandomPassword() {
	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}
$confirmation = createRandomPassword();
$fname=$_POST['fname'];
$qty=$_POST['qty'];
$lname=$_POST['lname'];
$busnum=$_POST['bus'];
$setnum=$_POST['setnumber'];
$date=$_POST['date'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$PP=$_POST['pickup_point'];
$result = mysql_query("SELECT * FROM route WHERE id='$busnum'");
while($row = mysql_fetch_array($result))
	{
	$price=$row['price'];
	}
	$payable=$qty*$price;
mysql_query("INSERT INTO customer (fname, lname, address, contact, bus, transactionum, payable, setnumber,pic_loc)
VALUES ('$fname', '$lname', '$address', '$contact', '$busnum', '$confirmation','$payable','$setnum','$PP')");
mysql_query("INSERT INTO reserve (date, bus, seat_reserve, transactionnum, seat,pick_loc)
VALUES ('$date', '$busnum', '$qty', '$confirmation','$setnum','$PP')");
echo"<script>alert('data Added');</script>";
header("location: print.php?id=$confirmation&setnumber=$setnum");
?>