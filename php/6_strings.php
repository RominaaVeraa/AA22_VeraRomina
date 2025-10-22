<?php require __DIR__ . '/../includes/header.php'; ?>

<div class="card">
  <h2>6 - Variables de tipo string (sustitución)</h2>
  <?php
    $a = 5;
    $b = 12;
    $c = 8;

    $suma = $a + $b + $c;

    $frase = "Tenemos los valores $a, $b y $c. La suma es $suma.";
  ?>
  <p><?php echo $frase; ?></p>
  <p><small>Nota: la sustitución funciona con <code>"comillas dobles"</code>. Con <code>'comillas simples'</code> no se interpolan variables.</small></p>

  <a class="btn" href="/guia-php/index.php">Volver al menú</a>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
