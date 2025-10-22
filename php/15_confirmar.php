<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>15 – Pedido grabado</h2>
  <?php
    $nombre    = trim($_POST['nombre'] ?? '');
    $direccion = trim($_POST['direccion'] ?? '');
    $tipos     = $_POST['tipos'] ?? [];

    // Cantidades asociadas
    $cantNap = (int)($_POST['cant_napolitana'] ?? 0);
    $cantMuz = (int)($_POST['cant_muzzarella'] ?? 0);
    $cantJyQ = (int)($_POST['cant_jyq'] ?? 0);

    if ($nombre === '' || $direccion === '' || !is_array($tipos) || count($tipos) === 0) {
      echo "<p>Datos incompletos.</p>";
    } else {
      $items = [];
      if (in_array('Napolitana', $tipos))   $items[] = "Napolitana x$cantNap";
      if (in_array('Muzzarella', $tipos))   $items[] = "Muzzarella x$cantMuz";
      if (in_array('Jamón y queso', $tipos))$items[] = "Jamón y queso x$cantJyQ";

      // línea a grabar
      $linea = "Nombre: $nombre. Direccion: $direccion. Pedido: " . implode(' | ', $items) . PHP_EOL;

      $ruta = __DIR__ . '/../data/pedidos.txt';
      if (!is_dir(dirname($ruta))) { mkdir(dirname($ruta), 0775, true); }

      $ok = @file_put_contents($ruta, $linea, FILE_APPEND | LOCK_EX);
      if ($ok === false) {
        echo "<p>No se pudo grabar el pedido.</p>";
      } else {
        echo "<p>Pedido guardado correctamente.</p>";
        echo "<pre>" . htmlspecialchars($linea) . "</pre>";
      }
    }
  ?>
  <a class="btn" href="15_pedido_pizza.php">Nuevo pedido</a>
  <a class="btn" href="/guia-php/index.php">Menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
