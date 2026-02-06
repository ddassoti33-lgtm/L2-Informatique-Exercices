<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire 6février</title>
    <link rel="stylesheet" href="formulaire.css">
</head>
<body>
    <center>
    <form method="POST" action="traitement1.php">
        <p>
            <label for="nom">Entrer le nom:</label>
            <input type="text" name="nom" id="nom"/>
        </p>
       
        <p>
            <label for="age">Entrer l'âge:</label>
            <input type="number" name="age" id="age" min="0"/>
        </p>
       
        <p>
            <button type="submit" class="btn" name="envoyer" value="ok">Envoyer</button>
        </p>
    </form>
    </center>
</body>
</html>