<?php
session_start();

// Page de bienvenue
if (isset($_SESSION['password'])) {
    $pseudo_par_defaut = "admin"; // Définir la valeur par défaut
    $pseudo_connecte = isset($_SESSION['pseudo']) ? $_SESSION['pseudo'] : $pseudo_par_defaut;
    echo "<h1>Bienvenue, $pseudo_connecte !</h1>";
    echo "<p>Vous êtes maintenant connecté en tant qu'abonné.</p>";
    // Ajoutez le reste de votre contenu de bienvenue ici
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espacemembre</title>
</head>

<body>


    <h2>Bienvenue sur votre espace membre à partir de cette espace vous pourrez via les boutons suivant </h2>

    </form>

</body>

</html>