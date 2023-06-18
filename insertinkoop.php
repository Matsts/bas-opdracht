<?php

include "InkooporderForm.php";
include 'inkoop.php';


$form = new InkooporderForm();
$form->generateForm();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $levId = $_POST["leverancier"];
    $artId = $_POST["artikel"];
    $aantal = $_POST["aantal"];

    $inkoop = new Inkoop();
    $inkoop->insertInkoop($levId, $artId, $aantal);

}



if(isset($inkoop) && $inkoop == true){
    echo '<script>alert("Inkoop toegevoegd")</script>';
    echo "<script> location.replace('index.php'); </script>";
}

?>