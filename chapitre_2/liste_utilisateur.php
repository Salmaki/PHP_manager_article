<?php
require_once '../chapitre_1/connexion.php';


try {

    $sql = "SELECT * FROM Utilisateur";
    $stmt = $pdo->query($sql);



    $utilisateur = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($utilisateur as $user) {
        echo "ID : " . $user['id'] . " - Nom : " . $user['nom'] . " - Email : " . $user['email'] . "<br>";
    }
   echo "<br>";
       echo "<table border='1'>
          <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
          </tr>";
    foreach ($utilisateur as $user) {
        echo "
            <tr>
                <td>{$user['id']}</td>
                <td>{$user['nom']}</td>
                <td>{$user['email']}</td>
            </tr>";
    }
    echo "</table>";


} catch (PDOException $e) {
    echo "erreur : " . $e->getMessage();
}
