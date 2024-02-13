<?php

class WikiController
{
    public function wiki()
    {
        require_once ('template/front/wiki.php');
    }

    public function bestiaire()
    {
        require_once('template/front/bestiaire.php');
    }

    public function lunes()
    {
        require_once('template/front/lunes.php');
    }
}