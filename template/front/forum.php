<?php $title = 'Topics'; ?>

<?php ob_start(); ?>
    <h1 class="text-center">Topics</h1>
<?php if (isset($topics)): ?>
    <ul>
        <?php foreach ($topics as $topic): ?>
            <li>
                <a href="topic.php?id=<?php echo $topic->topic_id; ?>">
                    <?php echo $topic->subject; ?>
                     -
                    <?php echo $topic->username; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php $body = ob_get_clean(); ?>

<?php require_once ('template/base.php'); ?>