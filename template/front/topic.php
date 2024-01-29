<?php if (isset($messages)): ?>
    <?php $title = $messages->subject; ?>

    <?php ob_start() ?>
    <h1><?php echo $messages[0]->subject; ?></h1>

    <?php foreach ($messages as $message): ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <p><?php echo nl2br($message->message); ?></p>
                    <p>Created by: <?php echo $message->username; ?></p>
                    <p>Created at: <?php echo $message->created; ?></p>
                    <br>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
<?php $body = ob_get_clean(); ?>

<?php require_once('template/base.php');?>
