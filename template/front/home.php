<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>
    <h1 class="text-center">Homepage</h1>
    <p class="text-center">Contenu de la page d'accueil</p>
<?php $body = ob_get_clean(); ?>

<?php require_once ('template/base.php'); ?>