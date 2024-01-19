<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="/"><img src="../../public/images/Site-logo.webp" width="174" height="80"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-3" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Wiki
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/wiki/Accueil">Accueil</a></li>
                            <li><a class="dropdown-item" href="/wiki/lunes">Lunes</a></li>
                            <li><a class="dropdown-item" href="/wiki/bestiaire">Bestiaire</a></li>
                            <li><a class="dropdown-item" href="#">...</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/forum">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/boombox">Boombox</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-success" href="/user/login">Login</a>
                    </li>
                    <li class="nav-item ps-2">
                        <a class="nav-link btn btn-outline-success" href="/user/register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-center">Boombox</h1>
    <p class="text-center"></p>


<?php $body = ob_get_clean(); ?>

<?php require_once ('template/base.php'); ?>