<?php
require_once __DIR__ . '/../produit/modele.php';

function getProduitsDansPanier(array $panier): array {
    $produitsComplets = getProduits();
    $resultat = [];
    foreach ($panier as $id => $quantite) {
        if (isset($produitsComplets[$id])) {
            $produit = $produitsComplets[$id];
            $produit['quantite'] = $quantite;
            $resultat[] = $produit;
        }
    }
    return $resultat;
}
