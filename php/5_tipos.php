<?php require __DIR__ . '/../includes/header.php'; ?>

<div class="card">
  <h2>5 - Tipos de variables</h2>
  <?php
    $entero  = 42;             
    $doble   = 3.14159;          
    $cadena  = "PHP y tipos";    
    $boolean = true;             

    $boolTexto = $boolean ? 'true' : 'false';
  ?>
  <ul>
    <li><strong>Integer:</strong> <?php echo $entero; ?></li>
    <li><strong>Double:</strong> <?php echo $doble; ?></li>
    <li><strong>String:</strong> <?php echo $cadena; ?></li>
    <li><strong>Boolean:</strong> <?php echo $boolTexto; ?></li>
  </ul>

  <a class="btn" href="/guia-php/index.php">Volver al menú</a>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
