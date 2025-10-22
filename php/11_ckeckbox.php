<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>11 – Formulario (checkbox)</h2>
  <form action="11_procesar.php" method="post">
    <p>
      <label>Nombre:
        <input type="text" name="nombre" required>
      </label>
    </p>
    <fieldset>
      <legend>Deportes que practica</legend>
      <label><input type="checkbox" name="deportes[]" value="futbol"> Fútbol</label><br>
      <label><input type="checkbox" name="deportes[]" value="basket"> Basket</label><br>
      <label><input type="checkbox" name="deportes[]" value="tennis"> Tennis</label><br>
      <label><input type="checkbox" name="deportes[]" value="voley"> Voley</label>
    </fieldset>
    <button type="submit" class="btn">Enviar</button>
  </form>
  <a class="btn" href="/guia-php/index.php">Menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
