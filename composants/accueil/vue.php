<?php require_once __DIR__ . '/../../includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= Lang::get('home_title'); ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light vh-100 d-flex flex-column">

<!-- Menu en haut -->
<header>
    <?php include __DIR__ . '/../../includes/menu.php'; ?>
</header>

<!-- Titre -->

<!-- Contenu principal centré -->
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="text-center">
        <h1 class="mb-4">👋 <?= Lang::get('welcome_message'); ?> <?= Lang::get('thanks_message'); ?></h1>
        <a href="?page=produits" class="btn btn-primary btn-lg"><?= Lang::get('see_khassaides'); ?></a>
    </div>

    <img src="images/touba.jpg" alt="Khassida Bamba">
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
