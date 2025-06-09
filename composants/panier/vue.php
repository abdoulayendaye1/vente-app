<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Panier</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">

<?php include __DIR__ . '/../../includes/menu.php'; ?>

<div class="container">
    <h2 class="mb-4">🛒 Mon Panier</h2>

    <?php if (!empty($contenuPanierComplet)): ?>
        <ul class="list-group mb-4">
            <?php foreach ($contenuPanierComplet as $produit): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        <strong><?= htmlspecialchars($produit['nom']) ?></strong><br>
                        <small>Prix unitaire : <?= number_format($produit['prix'], 2, ',', ' ') ?> €</small>
                    </div>

                    <div class="d-flex align-items-center">
                        <!-- Formulaire de modification -->
                        <form method="post" action="?page=panier&action=modifier" class="me-2 d-flex align-items-center">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($produit['id']) ?>">
                            <input type="number" name="quantite" value="<?= htmlspecialchars($produit['quantite']) ?>" min="1" class="form-control form-control-sm me-1" style="width: 70px;">
                            <button type="submit" class="btn btn-sm btn-warning">Modifier</button>
                        </form>

                        <!-- Formulaire de suppression -->
                        <form method="post" action="?page=panier&action=supprimer" onsubmit="return confirm('Supprimer ce produit du panier ?')">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($produit['id']) ?>">
                            <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Vider le panier -->
        <form method="post" action="?page=panier&action=vider" onsubmit="return confirm('Vider tout le panier ?')" class="mb-4">
            <button type="submit" class="btn btn-outline-danger">🗑️ Vider le panier</button>
        </form>

    <?php else: ?>
        <div class="alert alert-info">Votre panier est vide.</div>
    <?php endif; ?>

    <a href="?page=produits" class="btn btn-primary">← Retour aux produits</a>
</div>

<!-- Bootstrap JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
