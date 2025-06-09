<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil - Ma Boutique</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light vh-100 d-flex flex-column">

<!-- Menu en haut -->
<header>
    <?php include __DIR__ . '/../../includes/menu.php'; ?>
</header>

<!-- Contenu principal centré -->
<main class="flex-fill d-flex align-items-center justify-content-center">
    <div class="text-center">
        <h1 class="mb-4">👋BIENVENUE A DARAAY KAMIL !</h1>
        <a href="?page=produits" class="btn btn-primary btn-lg">Voir les Khassaides</a>
    </div>

    <img src="images/touba.jpg">
</main>

<!-- Bootstrap JS (optionnel) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
