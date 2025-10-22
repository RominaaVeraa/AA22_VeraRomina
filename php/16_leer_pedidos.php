<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>16 – Lectura de pedidos</h2>
  <?php
    $ruta = __DIR__ . '/../data/pedidos.txt';
    if (!file_exists($ruta)) {
      echo "<p>No hay pedidos registrados aún.</p>";
    } else {
      $contenido = file_get_contents($ruta);
      echo "<pre>" . htmlspecialchars($contenido) . "</pre>";
    }
  ?>
  <a class="btn" href="/guia-php/index.php">Menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
