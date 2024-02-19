<?php
$title = 'Topic';
$bodyClass = '';
?>

<?php ob_start(); ?>
    <div class="col-md-10 mx-auto bg-terminal mt-4 ps-2">
        <h1 class="text-center">Topic</h1>
        <form action="/createTopic" method="post">
            <div class="form-group>
                <input type="hidden" name="type" value="createTopic">
                <label for="subject" class="ms-1">>Subject</label><br>
                <input type="text" class="input-black-green <?= !empty($data['subject_err']) ? 'is-invalid' : ''; ?>" id="subject" name="subject" placeholder="Subject..." value="<?= $data['subject'] ?? ''; ?>">
                <div class="invalid-feedback"><?= $data['subject_err'] ?? ''; ?></div><br>
                <label for="message" class="ms-1">>Message</label><br>
                <textarea class="input-black-green <?= !empty($data['message_err']) ? 'is-invalid' : ''; ?>" id="message" name="message" placeholder="Message..." value="<?= $data['message'] ?? ''; ?>"></textarea>
                <div class="invalid-feedback"><?= $data['message_err'] ?? ''; ?></div><br>
                <button type="submit" class="submit-button">>Create</button>
            </div>
    </div>
<?php $body = ob_get_clean(); ?>

<?php require_once ('template/base.php'); ?>