<!DOCTYPE html>
<html lang="en">

<head>
  <title>Web Developer Portfolio | TV</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="data:image/x-icon;" type="image/x-icon">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <!-- Connect CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>


  <div class="container" id="main-content">

    <!-- PARTIAL - NAV -->
    <?php require __DIR__ . '/partials/nav.php'; ?>

    <main>

      <!---------- PARTIAL - INTRO ---------->
      <?php require __DIR__ . '/partials/intro.php'; ?>

      <!-- PARTIAL - ABOUT -->
      <?php require __DIR__ . '/partials/about.php'; ?>

      <!-- PARTIAL - TECH STACK -->
      <?php require __DIR__ . '/partials/tech-stack.php'; ?>

      <!-- PARTIAL - WORK -->
      <?php require __DIR__ . '/partials/work.php'; ?>

      <!-- PARTIAL - PROJECTS -->
      <?php require __DIR__ . '/partials/projects.php'; ?>

      <!-- PARTIAL - EDUCATION -->
      <?php require __DIR__ . '/partials/education.php'; ?>

      <!-- Scrollbar UP -->
      <a class="scroll-bar" data-target="main-content">
        <i class="fa-solid fa-arrow-up"></i>
        <p>go up</p>
      </a>

    </main>
  </div>

  <!-- PARTIAL - FOOTER -->
  <?php require __DIR__ . '/partials/footer.php'; ?>

  <!-- JavaScript -->
  <script src="lib/index.js"></script>
  <script src="lib/partials.js"></script>

</body>

</html>
