<!DOCTYPE html>
<html>
<body>
	
	<h1>Klant toevoeg menu</h1>

	<form action="insertKlant.php" method="post">
		<input type="text" name="klantNaam" placeholder="klantnaam" required> *</br>

		<input type="text" name="klantEmail" placeholder="e-Mail adres"required> *</br>

		<input type="text" name="klantAdres" placeholder="Adres" required> *</br>

		<input type="text" name="klantPostcode" placeholder="Postcode" required> *</br>

		<input type="text" name="klantWoonplaats" placeholder="Woonplaats" required> *</br></br>

		<input type="submit" name="submit" value="Klant toevoegen">
	</form>

	<a href="index.php">going back.</a>

	<?php 

	if(isset($_POST['submit'])){
		include "database.php";
		include 'klanten.php';
		$conn = dbConnect();

		$naam = $_POST        ['klantNaam'];
		$mail = $_POST        ['klantEmail'];
		$adres = $_POST       ['klantAdres'];
		$postcode = $_POST    ['klantPostcode'];
		$woonplaats = $_POST  ['klantWoonplaats'];

		$klant = new Klant();
		$klant->insertKlant($conn,
	    $naam,
		$mail,
	    $adres,
	    $postcode,
		$woonplaats);
	}

	if(isset($klant) && $klant == true){
		echo '<script>alert("Klant toegevoegd")</script>';
        echo "<script> location.replace('index.php'); </script>";
	} 

	?>
</body>
</html>