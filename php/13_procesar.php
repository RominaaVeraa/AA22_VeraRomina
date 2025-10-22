<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>13 – Contrato resultante</h2>
  <?php
    $contrato = trim($_POST['contrato'] ?? '');
    if ($contrato === '') {
      echo "<p>No se ingresó texto.</p>";
    } else {
      echo "<pre>" . htmlspecialchars($contrato) . "</pre>";
    }
  ?>
  <a class="btn" href="13_textarea.php">Volver</a>
  <a class="btn" href="/guia-php/index.php">Menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
