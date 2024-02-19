<?php
session_start();

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espaceadmin";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifie la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Vérification du formulaire de création de compte utilisateur
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"]; // Modification de la variable de l'adresse email
    $password = $_POST["password"];

    // Assurez-vous de valider les données et de mettre en œuvre des mécanismes de sécurité appropriés avant de les utiliser dans une requête SQL.

    // Création d'un compte utilisateur
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO membre (pseudo, password) VALUES ('$email', '$hashed_password')"; // Modification de la variable de l'adresse email

    if ($conn->query($sql) === TRUE) {
        echo "Compte utilisateur créé avec succès.";
    } else {
        echo "Erreur lors de la création du compte : " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Création de Compte</title>
</head>

<body>

    <h2>Formulaire de Création de Compte</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="email">Adresse Email:</label>
        <input type="email" name="email" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Créer le compte">
    </form>

</body>

</html>