<?php
$title = 'Register';

ob_start();
?>
    <div class=" col-md-10 mx-auto bg-terminal mt-4 ps-2">
        <h1 class="text-center">Please Register</h1>

        <form action="/register" method="post">
            <div class="form-group">
                <input type="hidden" name="type" value="register">
                <label class="ms-1" for="username">>Username</label><br>
                <input type="username" class="input-black-green <?= !empty($data['username_err']) ? 'is-invalid' : ''; ?>"
                       id="username" name="username" placeholder="Username..." value="<?= $data['username'] ?? ''; ?>">
                <div class="invalid-feedback ms-1"><?= $data['username_err'] ?? ''; ?></div><br>

                <label class="ms-1" for="email">>Email</label><br>
                <input type="email" class="input-black-green <?= !empty($data['email_err']) ? 'is-invalid' : ''; ?>"
                       id="email" name="email" placeholder="Email..." value="<?= $data['email'] ?? ''; ?>">
                <div class="invalid-feedback ms-1"><?= $data['email_err'] ?? ''; ?></div><br>

                <label class="ms-1" for="password">>Password</label><br>
                <input type="password" class="input-black-green <?= !empty($data['password_err']) ? 'is-invalid' : ''; ?>"
                       id="password" name="password" placeholder="Password..." value="<?= $data['password'] ?? ''; ?>">
                <div class="invalid-feedback ms-1"><?= $data['password_err'] ?? ''; ?></div><br>

                <label class="ms-1" for="confirm_password">>Confirm Password:</label><br>
                <input type="password"
                       class="input-black-green <?= !empty($data['confirm_password_err']) ? 'is-invalid' : ''; ?>"
                       id="confirm_password" name="confirm_password" placeholder="Repeat password"
                       value="<?= $data['confirm_password'] ?? ''; ?>">
                <div class="invalid-feedback ms-1"><?= $data['confirm_password_err'] ?? ''; ?></div><br>
            </div>
            <button type="submit" class="submit-button">Register</button>
        </form>
    </div>
<?php
$body = ob_get_clean();

require_once('template/base.php');
?>