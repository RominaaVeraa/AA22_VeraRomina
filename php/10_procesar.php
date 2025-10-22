<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>10 – Resultado</h2>
  <?php
    $nombre   = trim($_POST['nombre'] ?? '');
    $estudios = $_POST['estudios'] ?? null;
    $map = [
      '0' => 'no tiene estudios',
      '1' => 'tiene estudios primarios',
      '2' => 'tiene estudios secundarios'
    ];
    if ($nombre === '' || !isset($map[$estudios])) {
      echo "<p>Datos inválidos.</p>";
    } else {
      echo "<p>$nombre {$map[$estudios]}.</p>";
    }
  ?>
  <a class="btn" href="10_radio.php">Volver</a>
  <a class="btn" href="/guia-php/index.php">Menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
