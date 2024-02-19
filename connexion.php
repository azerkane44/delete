<?php
session_start();

// Connexion à la base de données - Remplacez ces informations par les vôtres
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espaceadmin";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}


if (isset($_POST['valider'])) {
    if (!empty($_POST["pseudo"]) && !empty($_POST['mdp'])) {
        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        // Requête SQL pour récupérer l'utilisateur correspondant au pseudo fourni
        $sql = "SELECT * FROM membre WHERE pseudo='$pseudo_saisi'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $mdp_hash = $row['password'];

            if ($pseudo_saisi === 'admin@gmail.com') {
                header('Location: espaceadmin.php');
                exit();
            } else {
                header('Location: espacemembre.php');
                exit();
            }
            // Vérification du mot de passe
            if (password_verify($mdp_saisi, $mdp_hash)) {
                $_SESSION['pseudo'] = $pseudo_saisi;
                header('Location: espacemembre.php');
                exit();
            } else {
                echo "<p class='error'>Votre mot de passe ou pseudo est incorrect </p>";
            }
        } else {
            echo "<p class='error'>Utilisateur non trouvé  </p>";
        }
    } else {
        echo "<p class='error'> Veuillez entrer un pseudo et un mot de passe valide...</p>";
    }
}

// Fermeture de la connexion à la base de données
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_espaceadmin.css" type="text/css" />
    <link rel="stylesheet" href="form.css" type="text/css" />
    <title>Document</title>
</head>

<body>
    <div class="formcontainer">
        <form method="POST" action="">
            <h4>Formulaire de connexion</h4>
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

                        <input type="submit" name="valider">
                    </div>
                </div>
            </div>
        </form>

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