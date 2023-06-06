<?php

include "databasezelf.php";
include "VerkoopForm.php";
include 'verkoop.php';
$conn = dbConnect();

$db = new Database();
$form = new VerkoopForm($db);
$form->generateForm();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $klantId = $_POST["klant"];
    $artId = $_POST["artikel"];
    $aantal = $_POST["aantal"];

    $verkoop = new Verkoop();
    $verkoop->insertVerkoop($conn, $klantId, $artId, $aantal);
}
	if(isset($verkoop) && $verkoop == true){
		echo '<script>alert("product toegevoegd")</script>';
        echo "<script> location.replace('index.php'); </script>";
	}

?>