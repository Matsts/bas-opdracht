<?php

include 'artikel.php';

$artikel = new Artikel(); 
$lijst = $artikel->selectArtikel();

$artikel->showTable($lijst);