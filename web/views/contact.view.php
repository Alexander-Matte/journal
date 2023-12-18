<?php require('partials/header.view.php') ?>
<?php require('partials/nav.view.php') ?>

<main>
    <div class="container">
        <div class="container w-50 mt-5">
            <h1 class="text-center mb-4">Contact Me</h1>
            <p class="text-center">Please fill out the form below to get in touch!</p>
            <form>
                <div class="form-group">
                    <label for="name">Your Name:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Your Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</main>

<?php require('partials/footer.view.php') ?>