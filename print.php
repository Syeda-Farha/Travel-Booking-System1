<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>

Print and present this details upon boarding the bus<br><br>
<a href="index.php">Home</a>
<a href="javascript:Clickheretoprint()">Print</a>

<div id="print_content" style="width: 400px;">
<strong>TICKET RESERVATION DETAILS</strong><br><br>
<?php
include('db.php');
$id=$_GET['id'];
//$setnum=$_GET['setnumber'];
//$ggagaga=$_GET['bus'];
$result = mysql_query("SELECT * FROM customer WHERE transactionum='$id'");
while($row = mysql_fetch_array($result))
	{
			echo"<img src='xres/images/NEWFOOTER.png' height='100px' width='380px' > <br>";
		
		echo 'Name: '.$row['fname'].' '.$row['lname'].'<br>';
		echo 'Address: '.$row['address'].'<br>';
		echo 'Contact: '.$row['contact'].'<br>';
		//echo 'Payable: '.$row['payable'].'<br>';
		echo 'Transaction Number: '.$row['transactionum'].'<br>';
		echo 'Pickup point: '.$row['pic_loc'].'<br>';
		echo 'Seat Number: '.$row['setnumber'].'<br>';
	}
$results = mysql_query("SELECT * FROM reserve WHERE transactionnum='$id'");
while($rows = mysql_fetch_array($results))
	{
		$ggagaga=$rows['bus'];
		
		//$pic_loc=$rows['pic_loc'];
		//echo 'Route and Type of Bus: ';
		$resulta = mysql_query("SELECT * FROM route WHERE id='$ggagaga'");
		while($rowa = mysql_fetch_array($resulta))
			{
			echo $rowa['route'].'   :'.$rowa['type'].'<br>';
			$time=$rowa['time'];
			
		echo 'Time of Departure: '.$time;
			}
		//echo '<br>';
		//echo 'Seat Number : '.$setnum.'<br>';
		//echo 'Pickup Point : '.$pic_loc.'<br>';
		echo 'Date Of Travel : '.$rows['date'].'<br>';
	}
?>

