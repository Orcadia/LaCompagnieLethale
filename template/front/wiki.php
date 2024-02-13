<?php $title = 'Wiki'; ?>

<?php ob_start(); ?>
<h1 class="text-center">Wiki</h1>
<p class="text-center">Contenu du wiki</p>


<?php $body = ob_get_clean(); ?>

<?php require_once ('template/base.php'); ?>
