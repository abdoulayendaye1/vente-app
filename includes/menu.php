<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="?page=accueil"><?= Lang::get('menu.title') ?></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link <?= ($_GET['page'] ?? '') === 'accueil' ? 'active' : '' ?>" href="?page=accueil">
                        <?= Lang::get('menu.home') ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_GET['page'] ?? '') === 'produits' ? 'active' : '' ?>" href="?page=produits">
                        <?= Lang::get('menu.quran') ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_GET['page'] ?? '') === 'produits' ? 'active' : '' ?>" href="?page=produits">
                        <?= Lang::get('menu.khassaides') ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($_GET['page'] ?? '') === 'panier' ? 'active' : '' ?>" href="?page=panier">
                        <?= Lang::get('menu.faggou') ?>
                    </a>
                </li>
            </ul>

            <!-- Langue dropdown -->
            <ul class="navbar-nav ms-auto">
                <?php
                // Générer l'URL actuelle sans le paramètre lang
                $currentUrl = $_SERVER['PHP_SELF'] . '?';
                $params = $_GET;
                unset($params['lang']);
                $queryString = http_build_query($params);
                $baseUrl = $queryString ? $_SERVER['PHP_SELF'] . '?' . $queryString . '&' : $_SERVER['PHP_SELF'] . '?';
                ?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="langDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        🌐 <?= strtoupper($_SESSION['lang'] ?? 'FR') ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                        <li><a class="dropdown-item" href="<?= $baseUrl ?>lang=fr">Français</a></li>
                        <li><a class="dropdown-item" href="<?= $baseUrl ?>lang=en">English</a></li>
                        <li><a class="dropdown-item" href="<?= $baseUrl ?>lang=wo">Wolof</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
