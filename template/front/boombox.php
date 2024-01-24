<?php $title = 'Boombox'; ?>
<?php ob_start(); ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../../public/css/boombox.css">
    <script defer src="../../public/js/boombox.js"></script>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="/"><img src="../../public/images/Site-logo.webp" width="174" height="80"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-3" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
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

    <div id="aWrap">
        <!-- (A) PLAY/PAUSE BUTTON -->
        <button id="aPlay" disabled><span id="aPlayIco" class="material-icons">
            play_arrow
        </span></button>

        <!-- (B) TIME -->
        <div id="aCron">
            <span id="aNow"></span> / <span id="aTime"></span>
        </div>

        <!-- (C) SEEK BAR -->
        <input id="aSeek" type="range" min="0" value="0" step="1" disabled>

        <!-- (D) VOLUME SLIDE -->
        <span id="aVolIco" class="material-icons">volume_up</span>
        <input id="aVolume" type="range" min="0" max="1" value="1" step="0.1" disabled>

        <!-- (E) PLAYLIST -->
        <div id="aList"></div>
    </div>

<?php
// Autre code PHP
?>

<?php require_once('template/base.php'); ?>