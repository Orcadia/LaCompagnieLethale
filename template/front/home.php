<?php $title = 'Accueil'; ?>

<?php ob_start(); ?>
<div class="col-md-10 mx-auto bg-terminal mt-4 text-center">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Bienvenue sur le wiki français de Lethal Company</h1>
            <h4>Ce site web a été réalisé dans le cadre d'un projet étudiant sur une durée de 1 mois (3h/semaine)</h4><br>
            <h1 class="text-center">La Compagnie à besoin de toi</h1>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/m5RB0Ej1mFg?si=m4lrCt2YFz2NIlzE"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen class="mb-4"></iframe>
        </div>
    </div>


    <?php $body = ob_get_clean(); ?>

    <?php require_once('template/base.php'); ?>
