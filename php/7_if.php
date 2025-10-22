<?php require __DIR__ . '/../includes/header.php'; ?>

<div class="card">
  <h2>7 - Estructura condicional (if)</h2>
  <?php
    $valor = rand(1, 3);

    if ($valor == 1) {
      $texto = "uno";
    } elseif ($valor == 2) {
      $texto = "dos";
    } else {
      $texto = "tres";
    }
  ?>
  <p><strong>Número generado:</strong> <?php echo $valor; ?></p>
  <p><strong>En texto:</strong> <?php echo $texto; ?></p>

  <a class="btn" href="/guia-php/index.php">Volver al menú</a>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
