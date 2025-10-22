<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>9 – Formulario: nombre y edad</h2>
  <form action="9_procesar.php" method="post">
    <p>
      <label>Nombre:
        <input type="text" name="nombre" required>
      </label>
    </p>
    <p>
      <label>Edad:
        <input type="number" name="edad" min="0" required>
      </label>
    </p>
    <button type="submit" class="btn">Enviar</button>
  </form>
  <a class="btn" href="/guia-php/index.php">Volver al menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
