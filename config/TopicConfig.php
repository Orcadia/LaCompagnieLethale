<?php

require_once('app/Model/ForumModel.php');

// Get form data
$topic_id = $_POST['topic_id'];
$user_id = $_POST['user_id'];
$message = $_POST['message'];
$created = date('Y-m-d H:i:s');

$forumModel = new ForumModel();

// Insert into database
$result = $forumModel->createResponse($topic_id, $user_id, $message, $created);

// Check if the query was successful
if($result){
    // Return result as JSON
    echo json_encode(['status' => 'success', 'message' => 'Data inserted successfully']);
} else {
    // Return error as JSON
    echo json_encode(['status' => 'error', 'message' => 'Failed to insert data']);
}