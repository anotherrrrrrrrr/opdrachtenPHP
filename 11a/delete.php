<?php
// auteur: Wigmans
// functie: verwijder een bier op basis van de id
include 'functions.php';

// Haal bier uit de database
if(isset($_GET['brouwcode'])){

    // test of insert gelukt is
    if(deletebrouw($_GET['brouwcode']) == true){
        echo '<script>alert("brouwcode: ' . $_GET['brouwcode'] . ' is verwijderd")</script>';
        echo "<script> location.replace('main.php'); </script>";
    } else {
        echo '<script>alert("brouw is NIET verwijderd")</script>';
    }
}
?>

