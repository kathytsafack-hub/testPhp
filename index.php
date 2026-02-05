<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testPhp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2> FORMULAIRE DE CONTACT </h2>
    <form method="post" action="traitement.php">
        <label>Nom :</label><br/>
        <input type="text" name="nom" required><br><br>
        
        <label>Email: </label><br/>
        <input type="email" name="email" required><br><br>

        <label> Message: </label><br/>
        <textarea name="message" required></textarea><br><br>

        <button type="submit">Envoyer</button>
</form>
</body>
</html>