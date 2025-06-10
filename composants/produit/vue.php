<?php require_once __DIR__ . '/../../includes/bootstrap.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ma boutique</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<?php include __DIR__ . '/../../includes/menu.php';

?>
<div class="container">
    <h2 class="mb-4">Produits</h2>

    <!-- Formulaire pour ajouter un nouveau produit -->
    <div class="mb-5">
        <h4><?= Lang::get('product.add_new') ?></h4>
        <form method="post" action="?page=produits&action=ajouter_produit" enctype="multipart/form-data">
            <div class="col-md-6">
                <label for="nom" class="form-label"><?= Lang::get('product.name') ?></label>
                <input type="text" id="nom" name="nom" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="prix" class="form-label"><?= Lang::get('product.price') ?></label>
                <input type="number" step="0.01" min="0" id="prix" name="prix" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="image" class="form-label"><?= Lang::get('product.image') ?></label>
                <input type="file" id="image" name="image" class="form-control" accept="image/*">
            </div><br>
            <div class="col-12">
                <button type="submit" class="btn btn-primary"><?= Lang::get('product.submit') ?></button>
            </div>
        </form>

    </div>

    <hr>

    <?php /** @var array $produits */ ?>
    <div class="row">
       <?php foreach ($produits as $produit): ?>
           <div class="col-md-3">
               <div class="card mb-4 shadow-sm" style="max-width: 200px;">
                   <?php if ($produit['image']): ?>
                       <img src="<?= htmlspecialchars($produit['image']) ?>" class="card-img-top img-fluid" alt="<?= htmlspecialchars($produit['nom']) ?>" style="max-width: 150px; max-height: 150px; object-fit: contain;">
                   <?php endif; ?>
                   <div class="card-body">
                       <h5 class="card-title"><?= htmlspecialchars($produit['nom']) ?></h5>
                       <p class="card-text"><?= htmlspecialchars($produit['prix']) ?> $</p>
                       <form method="post" action="?page=panier&action=ajouter">
                           <input type="hidden" name="id" value="<?= htmlspecialchars($produit['id']) ?>">
                           <button type="submit" class="btn btn-success"><?= Lang::get('product.add') ?></button>
                       </form>
                   </div>
               </div>
           </div>

       <?php endforeach; ?>

    </div>

    <a href="?page=panier" class="btn btn-outline-primary"><?= Lang::get('product.voir_le_panier') ?></a>
</div>

<!-- Bootstrap JS (optionnel) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<form method="post" action="?page=produits&action=vider_session"><br>
    <button type="submit" class="btn btn-danger"><?= Lang::get('product.empty') ?></button>
</form>

</body>
</html>
