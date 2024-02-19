<!DOCTYPE html>
<html>

<head>
    <title>Gestion des services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #f9f9f9;
            border-radius: 5px;
            padding: 20px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border-bottom: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Gestion des services</h2>

        <form action="" method="post">
            <input type="text" name="service_name" placeholder="Nom du service" required>
            <input type="submit" name="add_service" value="Ajouter">
        </form>

        <?php
        // Connexion à la base de données
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "espaceadmin";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier la connexion
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Traitement de l'ajout de service
        if (isset($_POST['add_service'])) {
            $service_name = $_POST['service_name'];

            // Requête SQL pour ajouter le service
            $sql = "INSERT INTO ServiceTable (ServiceName) VALUES ('$service_name')";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Le service \"$service_name\" a été ajouté avec succès.</p>";
            } else {
                echo "Erreur lors de l'ajout du service: " . $conn->error;
            }
        }

        // Traitement de la suppression de service
        if (isset($_POST['delete_service'])) {
            $service_id = $_POST['service_id'];

            // Requête SQL pour supprimer le service
            $sql = "DELETE FROM ServiceTable WHERE ID=$service_id";

            if ($conn->query($sql) === TRUE) {
                echo "<p>Le service a été supprimé avec succès.</p>";
            } else {
                echo "Erreur lors de la suppression du service: " . $conn->error;
            }
        }

        // Affichage de la liste des services
        $sql = "SELECT ID, ServiceName FROM ServiceTable";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>ID</th><th>Nom du service</th><th>Action</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ID"] . "</td>";
                echo "<td>" . $row["ServiceName"] . "</td>";
                echo "<td><form action='' method='post'><input type='hidden' name='service_id' value='" . $row["ID"] . "'><input type='submit' name='delete_service' value='Supprimer'></form></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Aucun service trouvé.</p>";
        }

        $conn->close();
        ?>
    </div>

</body>

</html>