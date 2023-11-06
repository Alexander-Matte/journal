<?php require(base("views/partials/header.php")) ?>
<?php require(base("views/partials/nav.php")) ?>
<?php require(base("views/partials/banner.php")) ?>


    <main class="ms-5">
        <div>
            <p>Create a journal entry here</p>
        </div>

               <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post">
                                <div class="mb-3">
                                    <label for="journal_body" class="form-label">Your Journal Entry:</label>
                                    <textarea class="form-control" id="journal_body" name="journal_body" rows="10" cols="5" placeholder="Today was a beautiful day because... Today was shit because..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
               </div>
    </main>

<?php require(base('views/partials/footer.php')) ?>