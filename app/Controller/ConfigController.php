<?php
class ConfigController
{
    public function topicConfig()
    {
        require_once ('config/TopicConfig.php');
    }

    public function getSongs()
    {
        include_once('config/BoomboxConfig.php');
    }
}
