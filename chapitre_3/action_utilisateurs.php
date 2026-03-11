<?php
require_once '../chapitre_1/connexion.php';
//Insertion de données
try {
    $sql = 'INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)';
    $stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)");

    $stmt->execute([
        'nom' => 'Yassin',
        'email' => 'Yassin@test.com'
    ]);
    echo "Utilisateur ajouté avec succès.";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
//Mise à jour de données

$stmt = $pdo->prepare("UPDATE Utilisateur SET email = :email WHERE id = :id");
$stmt->execute([
    'email' => 'Yassin.new@test.com',
    'id' => 10

]);
echo "Utilisateur mis à jour.";
//Suppression de données
$stmt = $pdo->prepare("DELETE FROM Utilisateur WHERE id = :id");
$stmt->execute(['id' => 10]);
echo "Utilisateur supprimé.";


echo $stmt->rowCount() . " ligne(s) affectée(s).";
