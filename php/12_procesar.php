<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>12 – Resultado</h2>
  <?php
    $nombre = trim($_POST['nombre'] ?? '');
    $rango  = $_POST['rango'] ?? '';
    $textos = ['1' => '1–1000', '2' => '1001–3000', '3' => '> 3000'];
    if ($nombre === '' || !isset($textos[$rango])) {
      echo "<p>Datos inválidos.</p>";
    } else {
      $paga = ($rango === '3') ? "debe pagar" : "no debe pagar";
      echo "<p>$nombre seleccionó el rango <strong>{$textos[$rango]}</strong> y <strong>$paga</strong> impuesto a las ganancias.</p>";
    }
  ?>
  <a class="btn" href="12_select.php">Volver</a>
  <a class="btn" href="/guia-php/index.php">Menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
