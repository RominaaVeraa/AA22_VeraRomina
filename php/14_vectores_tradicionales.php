<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>14 – Vectores (tradicionales)</h2>
  <?php
    $dias = ["Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo"];
    $primero = $dias[0];
    $ultimo  = $dias[count($dias)-1];
  ?>
  <p>Primer elemento: <strong><?php echo $primero; ?></strong></p>
  <p>Último elemento: <strong><?php echo $ultimo; ?></strong></p>
  <a class="btn" href="/guia-php/index.php">Menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
