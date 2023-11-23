<?php require(base("views/partials/header.php")) ?>
<?php require(base("views/partials/nav.php")) ?>
<?php require(base("views/partials/banner.php")) ?>

<main>
    <div>
        <p class="ms-5">This page will be used to display a sign-up form</p>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Sign Up</h2>
                        <form method="post">
                            <div class="form-group">
                                <label for="firstName">First Name (optional)</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter first name">
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name (optional)</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter last name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                            <small class="form-text text-muted mt-2">Note: First Name and Last Name are optional fields.</small>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require(base('views/partials/footer.php')) ?>
