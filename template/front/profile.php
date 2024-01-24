<?php $title = 'Profile'; ?>

<?php ob_start() ?>
    <div class="container text-center">
        <h1>Profile</h1>
        <p>Username: <?php echo htmlspecialchars($data['username']); ?></p>
        <p>Email: <?php echo htmlspecialchars($data['email']); ?></p>
    </div>
<?php $body = ob_get_clean();

require_once('template/base.php');