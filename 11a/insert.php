<?php
    // functie: formulier en database insert brouw
    // auteur: Wigmans

    echo "<h1>Insert brouw</h1>";

    require_once('functions.php');
	 
    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){

        // test of insert gelukt is
        if(insertbrouw($_POST) == true){
            echo "<script>alert('brouw is toegevoegd')</script>";
        } else {
            echo '<script>alert("brouw is NIET toegevoegd")</script>';
        }
    }
?>
<html>
    <body>
        <form method="post">

        <label for="brouwcode">brouwcode:</label>
        <input type="text" id="brouwcode" name="brouwcode" required><br>

        <label for="naam">naam:</label>
        <input type="text" id="naam" name="naam" required><br>

        <label for="land">land:</label>
        <input type="text" id="land" name="land" required><br>

        <input type="submit" name="btn_ins" value="Insert">
        </form>
        
        <br><br>
        <a href='main.php'>Home</a>
    </body>
</html>
