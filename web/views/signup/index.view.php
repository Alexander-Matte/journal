<?php require(view("partials/header.view.php")) ?>
<?php require(view("partials/nav.view.php")) ?>
<?php require(view("partials/banner.view.php")) ?>

<main>
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
                                <div id="passwordHelp" class="form-text text-danger"></div>
                            </div>


                            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign Up</button>
                            <small class="form-text text-muted mt-2">Note: First Name and Last Name are optional fields.</small>
                        </form>
                        <ul class="list-unstyled mt-2">
                        <?php if(isset($errors)): ?>
                            <?php foreach($errors as $error): ?>
                                    <li class="alert alert-danger">
                                        <?= $error; ?>
                                    </li>
                            <?php endforeach; ?>
                        <?php endif ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    document.getElementById('password').addEventListener('focus', function () {
        var passwordHelp = document.getElementById('passwordHelp');
        passwordHelp.innerHTML = 'Password must:';
        passwordHelp.innerHTML += '<ul>';
        passwordHelp.innerHTML += '<li id="length">Have minimum 8 characters in length.</li>';
        passwordHelp.innerHTML += '<li id="uppercase">Contain at least one uppercase English letter.</li>';
        passwordHelp.innerHTML += '<li id="lowercase">Contain at least one lowercase English letter.</li>';
        passwordHelp.innerHTML += '<li id="digit">Contain at least one digit.</li>';
        passwordHelp.innerHTML += '</ul>';
        passwordHelp.style.display = 'block';
    });

    document.getElementById('password').addEventListener('blur', function () {
        var passwordHelp = document.getElementById('passwordHelp');
        passwordHelp.style.display = 'none';
    });
</script>

<?php require(view('partials/footer.view.php')) ?>
