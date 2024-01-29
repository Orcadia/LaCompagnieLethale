<?php

require_once ('config/database.php');

class ForumModel
{
    public $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function getAllTopics() {
        $this->db->query('SELECT * FROM forum_topics as t LEFT JOIN users as u ON t.user_id = u.user_id ORDER BY created DESC');
        $results = $this->db->resultSet();
        return $results;
    }

    public function getTopicById($id)
    {
        $this->db->query('SELECT u.username, p.message, p.created, t.subject FROM forum_posts AS p LEFT JOIN forum_topics as t ON t.topic_id = p.topic_id LEFT JOIN users AS u on u.user_id = p.user_id WHERE p.topic_id = :id ORDER BY p.created ASC;');
        $this->db->bind(':id', $id);
        $result = $this->db->resultSet();
        var_dump($result);
        return $result;
    }
}