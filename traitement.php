<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "<!DOCTYPE html>";
    echo "<html lang='fr'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<title>Confirmation</title>";
    echo "<link rel='stylesheet' href='style.css'>";
    echo "</head>";
    echo "<body>";
    
    echo "<div class='confirmation'>";
    echo "<h2>Bienvenue 🎉 " . $nom . " !</h2>";
    echo "<p>Vos données sont enregistrées !!!</p>";
    echo "<p><strong>Email :</strong> " . $email . "</p>";
    echo "<p><strong>Message :</strong> " . $message . "</p>";
    echo "</div>";
    
    echo "</body>";
    echo "</html>";
}
?>