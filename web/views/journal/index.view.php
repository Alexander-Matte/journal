<?php require(view("partials/header.view.php")) ?>
<?php require(view("partials/nav.view.php")) ?>
<?php require(view("partials/banner.view.php")) ?>

    <main class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-4">
                    <a href="/journal/create" class="btn btn-primary btn-md btn-block mb-4">Create a Journal Entry</a>
                </div>
                <?php if(isset($results)): ?>
                    <?php foreach($results as $key => $value): ?>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href=<?= "journal/show?id={$value["id"]}" ?>>
                                        <?= $value["title"]; ?>
                                    </a>
                                </h5>
                                <p class="card-text"><?= $value["content"]; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </main>

<?php require(view('partials/footer.view.php')) ?>