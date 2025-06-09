<?php
session_start();

// Initialiser le panier
if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

$action = $_GET['action'] ?? null;

// Charger la liste des produits
require_once __DIR__ . '/../produit/modele.php';
$produitsDisponibles = getProduits(); // Supposé retourner un tableau indexé par ID

switch ($action) {
    case 'ajouter':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idProduit = $_POST['id'] ?? null;
            if ($idProduit !== null) {
                if (isset($_SESSION['panier'][$idProduit])) {
                    $_SESSION['panier'][$idProduit]++;
                } else {
                    $_SESSION['panier'][$idProduit] = 1;
                }
                header('Location: ?page=panier');
                exit;
            }
        }
        break;

    case 'modifier':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idProduit = $_POST['id'] ?? null;
            $quantite = (int)($_POST['quantite'] ?? 1);
            if ($idProduit !== null && $quantite > 0) {
                $_SESSION['panier'][$idProduit] = $quantite;
            }
            header('Location: ?page=panier');
            exit;
        }
        break;

    case 'supprimer':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $idProduit = $_POST['id'] ?? null;
            if ($idProduit !== null && isset($_SESSION['panier'][$idProduit])) {
                unset($_SESSION['panier'][$idProduit]);
            }
            header('Location: ?page=panier');
            exit;
        }
        break;

    case 'vider':
        $_SESSION['panier'] = [];
        header('Location: ?page=panier');
        exit;
        break;

    default:
        // Pas d'action ou action inconnue
        break;
}

// Construire le contenu complet du panier avec infos produit
$contenuPanierComplet = [];
foreach ($_SESSION['panier'] as $id => $quantite) {
    if (isset($produitsDisponibles[$id])) {
        $produit = $produitsDisponibles[$id];
        $produit['quantite'] = $quantite;
        $contenuPanierComplet[] = $produit;
    }
}

require_once __DIR__ . '/vue.php';
