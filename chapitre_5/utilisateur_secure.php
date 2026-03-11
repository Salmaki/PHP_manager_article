<?php
require_once '../chapitre_1/connexion.php';

// $stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)");
// $stmt->execute([
//     'nom' => 'Alae',
//     'email' => 'Alae@test.com'
// ]);
// $nom = 'Sara';
// $email = 'sara@test.com';
// $stmt = $pdo->prepare("INSERT INTO Utilisateur (nom, email) VALUES (:nom, :email)");
// $stmt->bindParam(':nom', $nom);
// $stmt->bindParam(':email', $email);
// $stmt->execute();
// $stmt = $pdo->prepare("SELECT * FROM Utilisateur WHERE email = :email");
// $stmt->execute(['email' => 'sara@test.com']);
// $user = $stmt->fetch(PDO::FETCH_ASSOC);
// echo "Nom : " . $user['nom'];
$stmt = $pdo->prepare("SELECT * FROM Utilisateur WHERE id = ?");
$stmt->execute([2]);
$user_id= $stmt->fetch(PDO::FETCH_ASSOC);
echo $user_id["nom"] ;
// echo "Utilisateur ajouté.";


