<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>10 – Formulario (radio)</h2>
  <form action="10_procesar.php" method="post">
    <p>
      <label>Nombre:
        <input type="text" name="nombre" required>
      </label>
    </p>
    <fieldset>
      <legend>Nivel de estudios</legend>
      <label><input type="radio" name="estudios" value="0" required> No tiene estudios</label><br>
      <label><input type="radio" name="estudios" value="1"> Primarios</label><br>
      <label><input type="radio" name="estudios" value="2"> Secundarios</label>
    </fieldset>
    <button type="submit" class="btn">Enviar</button>
  </form>
  <a class="btn" href="/guia-php/index.php">Menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
