<?php if (isset($messages)): ?>
<?php $title = $messages[0]->subject; ?>

<?php ob_start() ?>
<div class="col-md-10 mx-auto bg-terminal mt-4">
    <h1 class="text-center"><?php echo $messages[0]->subject; ?></h1>

    <?php foreach ($messages as $message): ?>
        <div class="terminal-card2">
            <p>
                ><?php echo htmlspecialchars(html_entity_decode($message->username, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')); ?>
                <br>
                <?php echo nl2br(htmlspecialchars(html_entity_decode($message->message), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')); ?>
            </p>
            <p> Created
                at: <?php echo htmlspecialchars(html_entity_decode($message->created, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')); ?></p>
        </div>
    <?php endforeach; ?>
    <?php endif; ?>
    <div class="terminal-card2 mt-4">
    <form id="responseForm">
        <textarea class="input-black-green <?= !empty($data['message_err']) ? 'is-invalid' : ''; ?>" id="message" name="message" placeholder="Message..." value="<?= $data['message'] ?? ''; ?>"></textarea>
        <button type="submit" class="submit-button">Submit</button>
    </form>
    </div>
</div>
<?php $body = ob_get_clean(); ?>

<?php require_once('template/base.php'); ?>

<?php
$title = 'Topics';
$bodyClass = '';
?>

<?php ob_start(); ?>

<h1 class="text-center">Topics</h1>
<?php if (isset($topics)): ?>
    <a href="/createTopic" class="terminal-clickable ">
        <div class="terminal-card mb-4">
            <p>>Create your own topic</p>
        </div>
    </a>
    <?php foreach ($topics as $topic): ?>
        <a href="/topic?id=<?php echo htmlspecialchars($topic->topic_id, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>"
           class="terminal-clickable">

            <p>><span class="text-right"><?php echo htmlspecialchars($topic->created); ?></span>
                <br><?php echo htmlspecialchars(html_entity_decode($topic->username, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')); ?>
            </p>
            </div>
        </a>
    <?php endforeach; ?>

<?php endif; ?>
</div>
<?php $body = ob_get_clean(); ?>

<?php require_once('template/base.php'); ?>
