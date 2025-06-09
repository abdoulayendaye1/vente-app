<!-- includes/menu.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="?page=accueil">KHASSIDA-BAMBA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= (($_GET['page'] ?? '') === 'accueil') ? 'active' : '' ?>" href="?page=accueil">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (($_GET['page'] ?? '') === 'produits') ? 'active' : '' ?>" href="?page=produits">Alkhourane</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (($_GET['page'] ?? '') === 'produits') ? 'active' : '' ?>" href="?page=produits">Khassaides</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= (($_GET['page'] ?? '') === 'panier') ? 'active' : '' ?>" href="?page=panier">Faggou</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
