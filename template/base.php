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
        <?php if (isset($stylesheet)) echo $stylesheet ?>
        <?php if (isset($javascript)) echo $javascript ?>
    </head>
    <body>
        <?php if (isset($body)) echo $body ?>
    </body>
</html>