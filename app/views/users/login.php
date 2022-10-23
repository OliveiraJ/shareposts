<?php require APPROOT . '/views/inc/header.php' ?>

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>Login in you account</h2>
            <p>Fill this form to login</p>
            <form action="<?php echo URLROOT; ?>/users/login" method="post">
                <div class="form-group">
                    <label for="email">Email: <sup>*</sup></label>
                    <input type="email" name="email" id="" class="form-control form-control-lg <?php echo (!empty($data['email_error']) ? 'is-invalid' : ''); ?>" value="<?php echo $data['email']; ?>">
                    <span class="invalid-feedback"><?= $data['email_error'] ?></span>
                </div>
                <div class="form-group">
                    <label for="password">Password: <sup>*</sup></label>
                    <input type="password" name="password" id="" class="form-control form-control-lg <?php echo (!empty($data['password_error']) ? 'is-invalid' : ''); ?>" value="<?php echo $data['password']; ?>">
                    <span class="invalid-feedback"><?= $data['password_error'] ?></span>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Login" class="btn btn-success btn-block">
                    </div>
                    <div class="col">
                        <a href="<?= URLROOT ?>/users/register" class="btn btn-light btn-block">Don't have an account? Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php' ?>