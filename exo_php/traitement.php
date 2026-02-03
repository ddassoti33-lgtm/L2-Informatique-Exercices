<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitement</title>
</head>
<body>
   
<form method = "POST" action ="traitement.php">
    <p>
        <label for="nom" > Entrer le nom: </label>    
       <input type="text" name="nom" id="nom"/></p>
    <p>
        <label for="prenom" > Entrer le prénom: </label>    
       <input type="text" name="prenom" id="prenom"/>

    </p>
    <p>
        <label for="age">Entrer l'âge:</label>
        <input type="number" name="age" id="age" min="0"/>
    </p>
    <p>
        <label for="email">Entrer l'email:</label>
        <input type="email" name="email" id="email"/>
    </p>
    <p>
        <input type="submit" value="Envoyer"/>
    </p>
</form>
<?php
if (isset($_POST['nom']) && !empty(trim($_POST['nom'])) &&
    isset($_POST['prenom']) && !empty(trim($_POST['prenom'])) &&
    isset($_POST['age']) && !empty(trim($_POST['age'])) &&
    isset($_POST['email']) && !empty(trim($_POST['email']))) {
    $nom = strip_tags($_POST['nom']);
    $prenom = strip_tags($_POST['prenom']);
    $age = strip_tags($_POST['age']);
    echo "<p>Bienvenue $nom $prenom, vous avez $age ans.</p>";
} else {
    echo "<p>Tous les champs sont obligatoires.</p>";
}
?>
 


 
   
</body>
</html>