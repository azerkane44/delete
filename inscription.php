<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membres;charset=utf8;', 'root', '');

if (isset($_POST['envoi'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']); // Note: Utiliser sha1 pour le hachage n'est pas recommandé. Considérez l'utilisation de méthodes plus sécurisées, comme password_hash.

        // Vérifier si le compte qui s'inscrit est l'administrateur
        if ($pseudo == "admin") {
            $insertUser = $bdd->prepare('INSERT INTO users(email, mdp) VALUES (?, ?)');
            $insertUser->execute(array($pseudo, $mdp));

            $recupUser = $bdd->prepare('SELECT * FROM users WHERE email = ? AND mdp = ?');
            $recupUser->execute(array($pseudo, $mdp));

            if ($recupUser->rowCount() > 0) {
                $_SESSION['email'] = $pseudo;
                $_SESSION['mdp'] = $mdp;
                $_SESSION['id'] = $recupUser->fetch()['id'];
                echo "Compte utilisateur créé avec succès.";
            } else {
                echo "<p class='error'>Une erreur s'est produite lors de la récupération du compte </p>";
            }
        } else {
            echo "<p class='error'>Seul le directeur peut inscrire les employés, veuillez lui demander et vous connecter via le bouton de connexion de la page d'acceuil.</p>";
        }
    } else {
        echo "<p class='error'>Veuillez compléter tous les champs...</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css" type="text/css" />
    <title>Inscritpion</title>
</head>

<body>
    <div class="formcontainer">
        <form method="POST" action="">
            <h4>Inscritpion</h4>
            <hr>
            <div class="name-field">
                <div>
                    <div>
                        <label for="email">E-mail :</label>
                        <input type="text" name="pseudo" autocomplet="off">

                    </div>
                    <div>
                        <label for="mdp"> Mot de passe :</label>
                        <input type="password" name="mdp">

                        <input type="submit" name="envoi">
                    </div>
                </div>
            </div>
    </div>

    <style>
        .error {
            position: absolute;
            top: 0;
            left: 0;
            color: black;
            font-weight: bold;
            text-align: center;
            background-color: red;
        }
    </style>
</body>

</html>