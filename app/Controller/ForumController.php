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

    public function createTopic()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        $data = [
            'subject' => isset($_POST['subject']) ? trim($_POST['subject']) : '',
            'user_id' => $_SESSION['user_id'],
            'created' => date('Y-m-d H:i:s'),
            'message' => isset($_POST['message']) ? trim($_POST['message']) : '',
            'subject_err' => '',
            'message_err' => ''

        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [
                'subject' => isset($_POST['subject']) ? trim($_POST['subject']) : '',
                'user_id' => $_SESSION['user_id'],
                'created' => date('Y-m-d H:i:s'),
                'message' => isset($_POST['message']) ? trim($_POST['message']) : '',
                'subject_err' => '',
                'message_err' => ''
            ];

            if (empty($data['subject'])) {
                $data['subject_err'] = 'Please enter a subject';
            }

            if (empty($data['message'])) {
                $data['message_err'] = 'Please enter a message';
            }

            if (empty($data['subject_err']) && empty($data['message_err'])) {
                if ($this->forumModel->createTopic($data)) {
                    $_SESSION['message'] = 'Topic created';
                    header('location: /forum');
                } else {
                    $_SESSION['message'] = 'Something went wrong. Please try again.';
                    header('location: /createTopic');
                    exit();
                }
            }else{
                $_SESSION['message'] = 'Something went wrong. Please try again.';
                header('location: /createTopic');
                exit();
            }
        }
        require_once ('template/front/createTopic.php');
    }

    public function createResponse()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $response = isset($_POST['response']) ? trim($_POST['response']) : '';

        $this->forumModel->createResponse($response);

        header('Content-Type: application/json');
        echo json_encode(['success' => true]);
    }
}