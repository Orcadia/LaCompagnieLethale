<?php

require_once('app/Model/ForumModel.php');

class ForumController
{
    public $forumModel;

    public function __construct()
    {
        $this->forumModel = new ForumModel();
    }

    public function listTopics() {
        $topics = $this->forumModel->getAllTopics();
        require_once ('template/front/forum.php');
    }
}