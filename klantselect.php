<?php
include "database.php"; include "klanten.php";

$conn = dbConnect();
$verkoop = new Klant();
$table = $verkoop->selectKlant($conn);

if(!empty($_POST['verwijderen'])){
	$verkoop->updateVerkoop($_POST['verkoopId'], $conn);
}
echo "<a href='index.php'>Home</a>";

?>