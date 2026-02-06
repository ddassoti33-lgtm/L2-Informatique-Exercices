<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitement</title>
</head>
<body>
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
    echo "<p>Tous les champs doivent être remplis.</p>";
}
?>
   <p> clique <a href="formulaire.php">ici</a> pour retourner au formulaire </p>
</body>
</html>