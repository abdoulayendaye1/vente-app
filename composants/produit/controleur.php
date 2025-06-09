<?php
session_start();

require_once __DIR__ . '/modele.php';

$action = $_GET['action'] ?? null;

// Gérer ajout de produit
if ($action === 'ajouter_produit' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom'] ?? '');
    $prix = (float)($_POST['prix'] ?? 0);
    $imagePath = ''; // Valeur par défaut

    if ($nom !== '' && $prix > 0) {

        //  Insère ce bloc ici
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'uploads/images/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $fileName = uniqid('product_', true) . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $uploadFile = $uploadDir . $fileName;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                $imagePath = $uploadFile;
            } else {
                echo 'Erreur lors de l\'upload de l\'image.';
            }
        } else {
            echo 'Aucun fichier téléchargé ou erreur lors de l\'upload.';
        }

        // Appel de la fonction avec imagePath
        ajouterProduit($nom, $prix, $imagePath);
    }

    header('Location: ?page=produits');
    exit;
}
if ($action === 'vider_session' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION = [];
    session_destroy();
    header('Location: ?page=produits');
    exit;
}

// Afficher les produits
$produits = getProduits();
require_once __DIR__ . '/vue.php';

?>
