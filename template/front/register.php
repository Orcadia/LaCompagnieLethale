<?php
$title = 'Register';

ob_start();
?>
    <h1 class="text-center">Please Register</h1>

    <div class="container">
        <form action="/register" method="post">
            <div class="form-group">
                <input type="hidden" name="type" value="register">
                <label for="username">Username:</label>
                <input type="username" class="form-control <?= !empty($data['username_err']) ? 'is-invalid' : ''; ?>" id="username" name="username" placeholder="Username..." value="<?= $data['username'] ?? ''; ?>" >
                <div class="invalid-feedback"><?= $data['username_err'] ?? ''; ?></div>

                <label for="email">Email:</label>
                <input type="email" class="form-control <?= !empty($data['email_err']) ? 'is-invalid' : ''; ?>" id="email" name="email"  placeholder="Email..." value="<?= $data['email'] ?? ''; ?>">
                <div class="invalid-feedback"><?= $data['email_err'] ?? ''; ?></div>

                <label for="password">Password:</label>
                <input type="password" class="form-control <?= !empty($data['password_err']) ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Password..." value="<?= $data['password'] ?? ''; ?>">
                <div class="invalid-feedback"><?= $data['password_err'] ?? ''; ?></div>

                <label for="confirm_password">Confirm Password:</label>
                <input type="password" class="form-control <?= !empty($data['confirm_password_err']) ? 'is-invalid' : ''; ?>" id="confirm_password" name="confirm_password" placeholder="Repeat password" value="<?= $data['confirm_password'] ?? ''; ?>">
                <div class="invalid-feedback"><?= $data['confirm_password_err'] ?? ''; ?></div>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
<?php
$body = ob_get_clean();

require_once ('template/base.php');
?>