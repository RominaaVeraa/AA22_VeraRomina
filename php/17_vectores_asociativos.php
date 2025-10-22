<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>17 – Vectores asociativos (claves de 5 usuarios)</h2>
  <?php
    $claves = [
      'ana'    => 'aNa_2025!',
      'beto'   => 'b3t0#42',
      'cami'   => 'cAm1$ok',
      'dario'  => 'd@r10_++',
      'eve'    => 'EvE**77'
    ];
    // Acceso por nombre
    $ejemplo = $claves['cami'];
  ?>
  <p>Clave de <strong>cami</strong>: <code><?php echo htmlspecialchars($ejemplo); ?></code></p>
  <h3>Todas las claves</h3>
  <ul>
    <?php foreach ($claves as $usuario => $clave): ?>
      <li><?php echo htmlspecialchars($usuario) . ': ' . htmlspecialchars($clave); ?></li>
    <?php endforeach; ?>
  </ul>
  <a class="btn" href="/guia-php/index.php">Menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
