<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>11 – Resultado</h2>
  <?php
    $nombre   = trim($_POST['nombre'] ?? '');
    $deportes = $_POST['deportes'] ?? [];
    $cantidad = is_array($deportes) ? count($deportes) : 0;
    if ($nombre === '') {
      echo "<p>Datos inválidos.</p>";
    } else {
      echo "<p>$nombre practica <strong>$cantidad</strong> deporte(s).</p>";
      if ($cantidad > 0) {
        echo "<p>Seleccionados: " . implode(', ', array_map('htmlspecialchars',$deportes)) . ".</p>";
      }
    }
  ?>
  <a class="btn" href="11_checkbox.php">Volver</a>
  <a class="btn" href="/guia-php/index.php">Menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
