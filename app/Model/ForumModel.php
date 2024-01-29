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
}