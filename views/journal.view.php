<?php require('partials/header.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>


    <main>
        <div class="ms-5">
            <p>Here we will add journal entries to our DB</p>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <form method="post">
                        <div class="mb-3">
                            <label for="journal_body" class="form-label">Your Journal Entry:</label>
                            <input type="text" class="form-control" id="journal_body" name="journal_body" placeholder="Today was a beautiful day because... Today was shit because...">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?php require('partials/footer.php') ?>