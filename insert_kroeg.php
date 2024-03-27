<?php
    // functie: formulier en database insert kroeg
    // auteur: Marlon Somers

    echo "<h1>Insert kroeg</h1>";

    require_once('functions.php');
	 
    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){

        // test of insert gelukt is
        if(insertkroeg($_POST) == true){
            echo "<script>alert('kroeg is toegevoegd')</script>";
        } else {
            echo '<script>alert("kroeg is NIET toegevoegd")</script>';
        }
    }
?>
<html>
    <body>
        <form method="post">

        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required><br>

        <label for="adres">adres:</label>
        <input type="text" id="adres" name="adres" required><br>

        <label for="plaats">plaats:</label>
        <input type="text" id="plaats" name="plaats" required><br>

        <input type="submit" name="btn_ins" value="Insert">
        </form>
        
        <br><br>
        <a href='crud_kroeg.php'>Home</a>
    </body>
</html>