<?php require(view("partials/header.view.php")) ?>
<?php require(view("partials/nav.view.php")) ?>
<?php require(view("partials/banner.view.php")) ?>

<main>
    <div class="container mt-5">
        <div class="message">
            <?php if(isset($message)): ?>
                <div class="alert alert-success"><?= $message ?></div>
            <?php endif;?>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Login</h2>
                        <form method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
                            <?php if(!empty($errors)): ?>
                            <div class="alert alert-danger mt-3" role="alert">
                                <?= $errors ?>
                            </div>
                            <?php endif; ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require(view('partials/footer.view.php')) ?>