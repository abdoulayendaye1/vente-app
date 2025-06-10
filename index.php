<?php
require_once 'classes/Lang.php';

$lang = $_GET['lang'] ?? 'fr'; // fr par défaut
Lang::load($lang);

$chemins = require_once __DIR__ . '/configuration/chemins_composants.php';

$page = $_GET['page'] ?? 'accueil';

switch ($page) {
    case 'produits':
        require_once $chemins['produit_controleur'];
        break;

    case 'panier':
        require_once $chemins['panier_controleur'];
        break;

    default:
        require_once $chemins['accueil_vue'];
}
