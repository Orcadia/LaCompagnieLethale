<?php $title = 'Profile'; ?>

<?php ob_start() ?>
    <div class="col-md-10 mx-auto bg-terminal mt-4">
        <h1 class="text-center">Profile</h1>
        <h4 class="ms-1">>Username: <?php echo htmlspecialchars($data['username']); ?></h4>
        <h4 class="ms-1">>Email: <?php echo htmlspecialchars($data['email']); ?></h4>
    </div>
<?php $body = ob_get_clean();

require_once('template/base.php');