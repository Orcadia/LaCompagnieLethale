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

    public function showTopic()
    {
        $id = $_GET['id'];
        $messages = $this->forumModel->getTopicById($id);
        require_once ('template/front/topic.php');
    }
}