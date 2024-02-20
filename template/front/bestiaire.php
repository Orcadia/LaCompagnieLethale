<?php $title = 'Bestiaire'; ?>

<?php ob_start(); ?>
    <div class="col-md-10 mx-auto bg-terminal mt-4">
    <h1 class="text-center">Bestiaire</h1>
    <p class="text-center">Contenu du bestiaire</p><br>
    <h1 class="text-center">W.I.P.</h1><br>

<?php $body = ob_get_clean(); ?>

<?php require_once('template/base.php'); ?>