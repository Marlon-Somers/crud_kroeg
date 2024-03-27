<?php
// auteur: Marlon Somers
// functie: verwijder een bier op basis van de kroegcode
include 'functions.php';

// Haal bier uit de database
if(isset($_GET['kroegcode'])){

    // test of insert gelukt is
    if(deleteKroeg($_GET['kroegcode']) == true){
        echo '<script>alert("Kroegcode: ' . $_GET['kroegcode'] . ' is verwijderd")</script>';
        echo "<script> location.replace('crud_kroeg.php'); </script>";
    } else {
        echo '<script>alert("Kroeg is NIET verwijderd")</script>';
    }
}
?>