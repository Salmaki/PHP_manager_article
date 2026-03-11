<?php 
require_once "../chapitre_1/connexion.php";

 try {
    $pdo->query("SELECT * FROM table_inexistante");
} catch (PDOException $e) {
    file_put_contents('erreur.log', $e->getMessage(),FILE_APPEND);
    echo "erreur de base donnes";
}
?>