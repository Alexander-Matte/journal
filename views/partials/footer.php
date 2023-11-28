</div>

</body>
  <!-- Footer -->
  <footer class="mt-auto text-center text-white" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
        <section class="">
            <?php if (!isset($_SESSION["userId"])): ?>
                <p class="d-flex justify-content-center align-items-center">
                    <a href="/login" class="me-2">
                        <button type="button" class="btn btn-link px-3">
                            Login
                        </button>
                    </a>
                    <a href="/signup">
                        <button type="button" class="btn btn-primary me-3">
                            Sign up for free
                        </button>
                    </a>
                </p>
            <?php else: ?>
                <p class="d-flex justify-content-center align-items-center">
                    <a href="/logout">
                        <button type="button" class="btn btn-link px-3 me-2">
                            Log Out
                        </button>
                    </a>
                </p>
            <?php endif ?>
        </section>

        <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-white" href="/">Journal.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</html>