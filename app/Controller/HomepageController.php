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

    public  function forum()
    {

    }

    public function boombox()
    {
        require_once ('template/front/boombox.php');
    }

    public function about()
    {

    }
}