<html lang="fr">
<head>
    <title><?php if (isset($title)) echo $title ?></title>
    <link rel="icon" href="public/images/Logo.png" type="image/png"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="public/js/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php if (isset($stylesheet)) echo $stylesheet ?>
    <?php if (isset($javascript)) echo $javascript ?>
</head>
<body class="<?php echo isset($bodyClass) ? $bodyClass : ''; ?>">
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a href="/">
            <img src="../../public/images/Site-logo.webp" width="174" height="80">
        </a>
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
                        <li><a class="dropdown-item" href="/wiki">Accueil</a></li>
                        <li><a class="dropdown-item" href="/lunes">Lunes</a></li>
                        <li><a class="dropdown-item" href="/bestiaire">Bestiaire</a></li>
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
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Profile</a>
                    </li>
                    <li class="nav-item ps-2">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item ps-2">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<?php if (isset($body)) echo $body ?>

</body>
</html>