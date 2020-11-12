<?php
include "dbconnect.php";
if(isset($_POST['action']) && !empty($_POST['action'])) {
    $data = $_POST['action'];
	
	if ($data[0] != ''){
		$query = "SELECT SIFRA_PODUZECA,NAZIV,ADRESA,POSTANSKI_BROJ,IBAN FROM pregled WHERE SIFRA_PODUZECA='$data[0]'";
		$res=mysqli_query($conn,$query);
		$row=mysqli_fetch_assoc($res);
		$count = mysqli_num_rows($res);
	}
	
	else if($data[1] != ''){
		$query = "SELECT SIFRA_PODUZECA,NAZIV,ADRESA,POSTANSKI_BROJ,IBAN FROM pregled WHERE NAZIV='$data[1]'";
		$res=mysqli_query($conn,$query);
		$row=mysqli_fetch_assoc($res);
		$count = mysqli_num_rows($res);
	}
	
	if ($count == 1) {
		$test = json_encode($row);
		echo $test;	
	}
}

if(isset($_POST['action2']) && !empty($_POST['action2'])) {
    $data = $_POST['action2'];
	// podaci = [sifra,naziv,adresa,pos_br,IBAN];
	$query = "INSERT INTO pregled(SIFRA_PODUZECA,NAZIV,ADRESA,POSTANSKI_BROJ,IBAN) VALUES('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";
	$res=mysqli_query($conn,$query);
    
	if ($res) {
		echo "Uspješno uneseno!";
	}
}

?>