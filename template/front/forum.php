<?php
$title = 'Topics';
$bodyClass = '';
?>

<?php ob_start(); ?>
<div class="col-md-10 mx-auto bg-terminal mt-4">
    <h1 class="text-center">Topics</h1>
<?php if (isset($topics)): ?>
    <a href="/createTopic" class="terminal-clickable ">
        <div class="terminal-card mb-4">
            <p>>Create your own topic</p>
        </div>
    </a>
        <?php foreach ($topics as $topic): ?>
        <a href="/topic?id=<?php echo htmlspecialchars($topic->topic_id, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?>" class="terminal-clickable">
            <div class="terminal-card">
                <p>><?php echo htmlspecialchars(html_entity_decode($topic->subject, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')); ?> <span class="text-right"><?php echo htmlspecialchars($topic->created); ?></span>
                    <br><?php echo htmlspecialchars(html_entity_decode($topic->username, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')); ?></p>
            </div>
        </a>
        <?php endforeach; ?>

<?php endif; ?>
</div>
<?php $body = ob_get_clean(); ?>

<?php require_once ('template/base.php'); ?>