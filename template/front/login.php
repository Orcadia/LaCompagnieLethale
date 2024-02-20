<?php $title = 'Login'; ?>

<?php ob_start() ?>

<div class=" col-md-10 mx-auto bg-terminal mt-4 ps-2">
<h1 class="text-center">Please Login</h1>
    <form method="post" action="/login">
        <div class="form-group">
            <label class="ms-1" for="username_email">>Username or Email</label><br>
            <input class="input-black-green" type="text" id="username_email" name="username_email" placeholder="Username or Email..."><br>

            <label class="ms-1" for="password">>Password</label><br>
            <input class="input-black-green" type="password" id="password" name="password" placeholder="Password..."><br>

            <button type="submit" class="submit-button">>Login</button>
        </div>
    </form>
</div>
<?php $body = ob_get_clean();

require_once('template/base.php');
?>

