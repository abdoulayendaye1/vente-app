<?php
session_start();

// Si une langue est passée dans l'URL, on la sauvegarde en session
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

// On charge la langue depuis la session ou 'fr' par défaut
$lang = $_SESSION['lang'] ?? 'fr';
require_once __DIR__ . '/../classes/Lang.php';
Lang::load($lang);
