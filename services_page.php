<!DOCTYPE html>
<html>

<head>
    <title>Liste des services</title>
    <style>
        /*  corps de page */
        body {
            font-family: Arial, sans-serif;

            background-color: #f4f4f4;

            margin: 0;
            padding: 0;
        }

        /*  Style du conteneur */
        .container {
            width: 80%;

            margin: 20px auto;

            background-color: #fff;

            border-radius: 10px;

            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }

        /* Style pour l'en-tête */
        h2 {
            text-align: center;

            padding: 20px 0;

        }

        /* Style pour la table */
        table {
            width: 100%;

            border-collapse: collapse;

        }

        /* Style pour les cellules de données */
        td {
            border-bottom: 1px solid #ddd;
            padding: 15px;
            text-align: center;
            transition: background-color 0.3s ease;

        }

        /* Style pour le survol */
        tr:hover td {
            background-color: #cceeff;
            /* Couleur de fond au survol */
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Liste des services</h2>
        <table>
            <?php
            // connexion à la base de données
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "espaceadmin";


            $conn = new mysqli($servername, $username, $password, $dbname);

            // Vérification de la connexion
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // selection de la table d'affichage des services
            $sql = "SELECT ServiceName FROM ServiceTable";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Donées de la table
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["ServiceName"] . "</td></tr>";
                }
            } else {
                echo "<tr><td>Aucun résultat</td></tr>"; // echo si aucun resuktat trouver
            }
            $conn->close(); // fermeture de la connexion a la bsd
            ?>
        </table>
    </div>

</body>

</html>