<?php
$FirstName =$_POST['FirstName'];
$LastName =$_POST['LastName'];
$AddressFirstLine =$_POST['AddressFirstLine'];
$AddressAptNumber =$_POST['AddressAptNumber'];
$AddressCity =$_POST['AddressCity'];
$AddressState =$_POST['AddressState'];
$AddressZIP =$_POST['AddressZIP'];
$SSN =$_POST['SSN'];



$conn = new mysqli ('localhost','root','123_Test','application');
if ($conn->connect_error){
	die('Connection Failed : '. $conn->connect_error);
}else{
	$stmt = $conn->prepare ("INSERT INTO applicationinformation (FirstName, LastName, AddressFirstLine, AddressAptNumber, AddressCity, AddressState, AddressZIP, SSN)
			values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt-> bind_param ("ssssssii",$FirstName, $LastName, $AddressFirstLine, $AddressAptNumber, $AddressCity, $AddressState, $AddressZIP, $SSN,);
		$stmt->execute();
		echo "Your Application Was Submitted Successfully. Thank you for becoming a member at Millar Bank.";
	$stmt->close();
	$conn->close();
}
	