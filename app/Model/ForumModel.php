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
        //var_dump($result);
        return $result;
    }

    public function createTopic($data)
    {
        // Decode HTML entities in the subject and message
        $data['subject'] = html_entity_decode($data['subject'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $data['message'] = html_entity_decode($data['message'], ENT_QUOTES | ENT_HTML5, 'UTF-8');

        // First query
        $this->db->query('INSERT INTO forum_topics (subject, user_id, created) VALUES (:subject, :user_id, :created)');
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':subject', $data['subject']);
        $this->db->bind(':created', $data['created']);
        $this->db->execute();

        // Get the ID of the last inserted topic
        $topic_id = $this->db->lastInsertId();

        // Second query
        $this->db->query('INSERT INTO forum_posts (topic_id, message, user_id, created) VALUES (:topic_id, :message, :user_id, :created)');
        $this->db->bind(':topic_id', $topic_id);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':message', $data['message']);
        $this->db->bind(':created', $data['created']);
        $this->db->execute();

        // Check if the queries were successful
        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function createResponse($data)
    {
        // Decode HTML entities in the message
        $data['message'] = html_entity_decode($data['message'], ENT_QUOTES | ENT_HTML5, 'UTF-8');

        // First query
        $this->db->query('INSERT INTO forum_posts (topic_id, message, user_id, created) VALUES (:topic_id, :message, :user_id, :created)');
        $this->db->bind(':topic_id', $data['topic_id']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':message', $data['message']);
        $this->db->bind(':created', $data['created']);
        $this->db->execute();

        // Check if the query was successful
        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }
}