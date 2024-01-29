<?php $title = 'Register'; ?>

<?php ob_start() ?>

<h1 class="text-center">Please Login</h1>
<div class="container">
<form method="post" action="/login">
    <div class="form-group">
        <label for="username_email">Username or Email</label>
        <input class="form-control" type="text" id="username_email" name="username_email">

        <label for="password">Password</label>
        <input class="form-control" type="password" id="password" name="password">

        <button type="submit" class="btn btn-primary">Login</button>
    </div>
</form>
</div>
<?php $body = ob_get_clean();

require_once('template/base.php');
?>

