<!--app/views/users/login-->
<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <?php flash('register_success') ?>
            <h2>Login</h2>
            <p>Please fill your credentials to log in</p>
            <form action="<?=  URLROOT ?>/users/login" method="post">
                <div class="form-group">
                    <label for="email">Email : <sup>*</sup></label>
                    <input type="email" id="email" name="email" class="form-control form-control-lg is-invalid
                            <?= (!empty($data['email_err'])) ? 'is-invalid' : '';?>" value="<?= $data['email']; ?>">
                    <span class="invalid-feedback"><?= $data['email_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="password">Password : <sup>*</sup></label>
                    <input type="password" id="password" name="password" class="form-control form-control-lg is-invalid
                            <?= (!empty($data['password_err'])) ? 'is-invalid' : '';?>" value="<?= $data['password']; ?>">
                    <span class="invalid-feedback"><?= $data['password_err']; ?></span>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Login" class="btn btn-success btn-clock">
                    </div>
                    <div class="col">
                        <a href="<?= URLROOT; ?>/users/register" class="btn btn-light btn-block">No account ? Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>



