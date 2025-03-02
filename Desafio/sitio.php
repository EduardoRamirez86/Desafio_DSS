<?php require 'header.inc.php'; ?>
<body class="bg-dark text-white">
  <?php require 'nav.inc.php'; ?>

  <!-- Sección Hero con fondo degradado, animaciones y llamada a la acción -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center hero-div">
      <h1 class="display-3 animate__animated animate__fadeInDown">Bienvenido a Soluciones Innovadoras</h1>
      <p class="lead animate__animated animate__fadeInUp">Transformamos ideas en realidades digitales.</p>
      <a href="#content" class="btn btn-lg btn-outline-light animate__animated animate__fadeInUp">Descubre Más</a>
    </div>
  </section>

  <!-- Contenedor principal con dos columnas: contenido y sidebar -->
  <div class="container my-5 min-vh-75" id="content">
    <div class="row">
      <div class="col-lg-7">
        <?php require 'content.inc.php'; ?>
      </div>
      <div class="col-lg-5">
        <?php require 'sidebar.inc.php'; ?>
      </div>
    </div>
  </div>

  <?php require('footer.inc.php'); ?>

  <!-- Scripts de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

