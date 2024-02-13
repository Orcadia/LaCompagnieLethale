<?php

class HomepageController
{
    public function home()
    {
        require_once ('template/front/home.php');
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