<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>9 – Resultado</h2>
  <?php
    $nombre = trim($_POST['nombre'] ?? '');
    $edad   = (int)($_POST['edad'] ?? -1);
    if ($nombre === '' || $edad < 0) {
      echo "<p>Datos inválidos.</p>";
    } else {
      $mayor = ($edad >= 18) ? "MAYOR de edad" : "MENOR de edad";
      echo "<p><strong>$nombre</strong> tiene <strong>$edad</strong> años y es <strong>$mayor</strong>.</p>";
    }
  ?>
  <a class="btn" href="9_formulario.php">Volver al formulario</a>
  <a class="btn" href="/guia-php/index.php">Menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
