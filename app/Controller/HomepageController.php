<?php

class HomepageController
{
    public function home()
    {
        require_once ('template/front/home.php');
    }

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

    public  function forum()
    {
        require_once ('template/front/forum.php');
    }

    public function boombox()
    {
        require_once ('template/front/boombox.php');
    }

    public function about()
    {
        require_once ('template/front/about.php');
    }
}