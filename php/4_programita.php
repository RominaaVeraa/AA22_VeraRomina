<?php require __DIR__ . '/../includes/header.php'; ?>

<div class="card">
  <h2>4 - Un programita más útil que "Hola Mundo"</h2>
  <?php
    $num = rand(1, 100);

    $mensaje = ($num <= 50) ? "El número es menor o igual a 50." : "El número es mayor a 50.";
  ?>
  <p><strong>Valor generado:</strong> <?php echo $num; ?></p>
  <p><?php echo $mensaje; ?></p>

  <a class="btn" href="/guia-php/index.php">Volver al menú</a>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
