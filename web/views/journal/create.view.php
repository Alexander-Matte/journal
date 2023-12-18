<?php require(view("partials/header.view.php")) ?>
<?php require(view("partials/nav.view.php")) ?>
<?php require(view("partials/banner.view.php")) ?>

    <main class="ms-5">
               <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title:</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter a title for your journal entry" required minlength="3">
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter a title with at least 3 characters.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="content" class="form-label">Your Journal Entry:</label>
                                    <textarea class="form-control" id="content" name="content" rows="10" cols="5" placeholder="Today was a beautiful day because... Today was terrible because..." required minlength="10"></textarea>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please enter content with at least 10 characters.</div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
               </div>
    </main>

<?php require(view('partials/footer.view.php')) ?>