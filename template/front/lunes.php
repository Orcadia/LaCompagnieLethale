<?php $title = 'Lunes'; ?>

<?php ob_start(); ?>
<div class="col-md-10 mx-auto bg-terminal mt-4">
<h1 class="text-center">Lunes</h1>
<p class="text-center">Les lunes</p>


<?php $body = ob_get_clean(); ?>

<?php require_once ('template/base.php'); ?>
