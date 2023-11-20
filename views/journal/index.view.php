<?php require(base("views/partials/header.php")) ?>
<?php require(base("views/partials/nav.php")) ?>
<?php require(base("views/partials/banner.php")) ?>


    <main class="ms-5">
        <div>
            <p>Here we will view journal entries and create if none are present</p>
        </div>
        <a href="/journal/create">
            <div class="create-entry-btn mb-4">
                <button type="button" class="btn btn-primary">Create a Journal Entry</button>
            </div>
        </a>



        <?php foreach($results as $key=>$value): ?>
            <ul>
                <li>
                    <a href=<?= "journal/entry?id={$value["id"]}" ?>>
                        <?= $value["title"]; ?>
                    </a>
                </li>
            </ul>
        <?php endforeach; ?>
    </main>

<?php require(base('views/partials/footer.php')) ?>