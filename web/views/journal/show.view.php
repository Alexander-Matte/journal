<?php require(view("partials/header.view.php")) ?>
<?php require(view("partials/nav.view.php")) ?>

    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <article class="card mb-4">
                        <div class="card-body">
                            <h1 class="card-title">
                                <?php if(isset($result["title"])): ?>
                                <?= $result["title"] ?>
                                <?php endif; ?>
                            </h1>
                            <p class="card-text">
                                <?php if(isset($result["content"])): ?>
                                    <?= $result["content"] ?>
                                <?php endif; ?>
                            </p>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <div class="btn-group">
                                <a href="/journal/edit?id=<?= $postId ?>" class="btn btn-primary me-2">Edit Entry</a>
                                <a href="/journal/destroy?id=<?= $postId ?>" class="btn btn-danger" onclick="return confirmDelete()">Delete Entry</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>
    <script>
        function confirmDelete() {
            // Display a confirmation dialog
            if (confirm("Are you sure you want to delete this entry?")) {
                // If user confirms, proceed with deletion
                return true;
            } else {
                // If user cancels, prevent the default action (deletion)
                return false;
            }
        }
    </script>

<?php require(view('partials/footer.view.php')) ?>