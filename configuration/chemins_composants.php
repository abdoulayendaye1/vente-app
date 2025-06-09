<?php

require_once __DIR__ . '/../classes/Chemin_Composant.php';

return [
    'accueil_vue' => Chemin_Composant::obtenir_chemin_complet('accueil/vue.php'),
    'produit_controleur' => Chemin_Composant::obtenir_chemin_complet('produit/controleur.php'),
    'produit_modele' => Chemin_Composant::obtenir_chemin_complet('produit/modele.php'),
    'produit_vue' => Chemin_Composant::obtenir_chemin_complet('produit/vue.php'),
    'panier_controleur' => Chemin_Composant::obtenir_chemin_complet('panier/controleur.php'),
    'panier_vue' => Chemin_Composant::obtenir_chemin_complet('panier/vue.php'),
];
