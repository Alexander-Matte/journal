<?php require(base("views/partials/header.php")) ?>
<?php require(base("views/partials/nav.php")) ?>



    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <article class="card mb-4">
                        <div class="card-body">
                            <h1 class="card-title"><?= $result["title"] ?></h1>
                            <p class="card-text"><?= $result["content"] ?></p>
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <div class="btn-group">
                                <a href="/journal/edit?id=<?= $postId ?>" class="btn btn-primary me-2">Edit Entry</a>
                                <a href="/journal/destroy?id=<?= $postId ?>" class="btn btn-danger">Delete Entry</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </main>



<?php require(base('views/partials/footer.php')) ?>