<?php
session_start();

// Connexion à la base de données 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "espaceadmin";

// connexion a la bsd
$conn = new mysqli($servername, $username, $password, $dbname);

// Controle de la connexion à la bsd
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Controle si un membre doit être banni
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ban'])) {
    if (!empty($_POST['pseudo'])) {
        $getid = $_POST['pseudo'];

        // Requête sql supprimer l'utilisateur 
        $sql = "DELETE FROM membre WHERE pseudo='$getid'";
        $result = $conn->query($sql);

        if ($result) {
            // Actualisation de la page
            echo "<meta http-equiv='refresh' content='0'>";
            exit();
        } else { /* Message d'erreur si le bannisement n'est pas fait*/
            echo "Une erreur s'est produite lors du bannissement du membre.";
        }
    } else { /* Message d'ereur si aucun pseudo specifié */
        echo "Aucun pseudo spécifié pour le bannissement.";
    }
}

// Récupération des utilisateurs de la table membre
$recupUsers = $conn->query('SELECT id, pseudo FROM membre');

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des membres</title>
    <style>
        /*Style de la table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Liste des membres</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Pseudo</th>
                <th>Action</th> <!--  colonne pour le bouton de bannissement -->
            </tr>
        </thead>
        <tbody>
            <?php while ($user = $recupUsers->fetch_assoc()) { ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['pseudo']; ?></td>
                    <td>
                        <!-- Bouton pour bannir les utilisateurs -->
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <input type="hidden" name="pseudo" value="<?= $user['pseudo']; ?>">
                            <input type="submit" name="ban" value="Bannir">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>

<?php
// Fermeture de la connexion à la bsd
$conn->close();
?>