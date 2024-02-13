<?php $title = 'Boombox'; ?>
<?php ob_start(); ?>


<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="../../public/css/boombox.css">
<script defer src="../../public/js/boombox.js"></script>

<div class="mt-5 d-flex align-items-center justify-content-center">
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
        <label for="aSeek"></label><input id="aSeek" type="range" min="0" value="0" step="1" disabled>

        <!-- (D) VOLUME SLIDE -->
        <span id="aVolIco" class="material-icons">volume_up</span>
        <label for="aVolume"></label><input id="aVolume" type="range" min="0" max="1" value="1" step="0.1" disabled>

        <!-- (E) PLAYLIST -->
        <div id="aList"></div>
    </div>
</div>

<?php $body = ob_get_clean(); ?>

<?php require_once('template/base.php'); ?>
