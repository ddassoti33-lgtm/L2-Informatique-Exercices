<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>traitement 6février</title>
</head>
<body>
    <?php
if (isset($_POST['nom']) && !empty(trim($_POST['nom'])) &&
    isset($_POST['age']) && !empty(trim($_POST['age']))) {
    $nom = strip_tags($_POST['nom']);
    $age = strip_tags($_POST['age']);
    echo"<p>Bonjour $nom, vous avez $age ans.</p>";
    if ($age<18){
        echo"<p>Vous êtes mineur.</p>";
    } else {
        echo"<p>Vous êtes majeur.</p>";
    }
    
    }
    else {
        echo"<p>Tous les champs doivent être remplis.</p>";
    }
    ?>
    cliquez <a href="formulaire1.php">ici</a> pour retourner au formulaire
</body>
</html>