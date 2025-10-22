<?php require __DIR__ . '/../includes/header.php'; ?>

<div class="card">
  <h2>8 - Estructuras repetitivas (for / while / do-while)</h2>

  <h3>Tabla del 2 (for)</h3>
  <table class="table">
    <thead><tr><th>Expresión</th><th>Resultado</th></tr></thead>
    <tbody>
    <?php
      for ($f = 2; $f <= 20; $f += 2) {
        $i = $f / 2; 
        echo "<tr><td>2 × $i</td><td>$f</td></tr>";
      }
    ?>
    </tbody>
  </table>

  <h3>Tabla del 2 (while)</h3>
  <table class="table">
    <thead><tr><th>Expresión</th><th>Resultado</th></tr></thead>
    <tbody>
    <?php
      $f = 2;
      $i = 1;
      while ($f <= 20) {
        echo "<tr><td>2 × $i</td><td>$f</td></tr>";
        $f += 2;
        $i++;
      }
    ?>
    </tbody>
  </table>

  <h3>Tabla del 2 (do/while)</h3>
  <table class="table">
    <thead><tr><th>Expresión</th><th>Resultado</th></tr></thead>
    <tbody>
    <?php
      $f = 2;
      $i = 1;
      do {
        echo "<tr><td>2 × $i</td><td>$f</td></tr>";
        $f += 2;
        $i++;
      } while ($f <= 20);
    ?>
    </tbody>
  </table>

  <a class="btn" href="/guia-php/index.php">Volver al menú</a>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
