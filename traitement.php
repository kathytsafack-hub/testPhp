<?php
if ($_SERVER["REQUEST_METHOD"] === "POST")
    {
        $Nom =
        htmlspecialchars($_POST["nom"]);
         $Email =
        htmlspecialchars($_POST["email"]);
         $Message =
        htmlspecialchars($_POST["message"]);

        if (empty($nom) || empty($Email) || empty($Message)){
            echo "tous les champs sont obligatoires.";
            exit;
        }
        echo "<h2> Message envoye avec success </h2>";
        echo "<p><strong> Nom :</strong> $nom</P>";
         echo "<p><strong> Email :</strong> $email</P>";
          echo "<p><strong> Message :</strong> $message</P>";
    }
    else{
        echo "Acces interdit.";
    }