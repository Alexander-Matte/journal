<?php require(base("views/partials/header.php")) ?>
<?php require(base("views/partials/nav.php")) ?>



    <main class="ms-5">
        <div>
            <h1><?= $result["title"] ?></h1>
            <p><?= $result["content"] ?></p>
        </div>
    </main>

<?php require(base('views/partials/footer.php')) ?>