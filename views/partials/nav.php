<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/journal">Journal</a>
        </li>
      </ul>
      <!-- Left links -->

        <div class="d-flex justify-content-between align-items-center">
            <?php if (!isset($_SESSION["userID"])): ?>
                <a href="/login">
                    <button type="button" class="btn btn-link px-3 me-2">
                        Login
                    </button>
                </a>
            <?php else: ?>
                <div class="logged-in px-3 me-2">
                    Log Out
                </div>
            <?php endif ?>

            <a href="/signup">
                <button type="button" class="btn btn-primary me-3">
                    Sign up for free
                </button>
            </a>
        </div>

    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->