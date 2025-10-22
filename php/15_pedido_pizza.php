<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>15 – Pedido de pizzas (graba en archivo)</h2>
  <form action="15_confirmar.php" method="post">
    <p><label>Nombre: <input type="text" name="nombre" required></label></p>
    <p><label>Dirección: <input type="text" name="direccion" required></label></p>

    <fieldset>
      <legend>Tipos de pizza</legend>
      <label><input type="checkbox" name="tipos[]" value="Napolitana"> Napolitana</label>
      <label>Cantidad: <input type="number" name="cant_napolitana" min="0" value="0"></label>
      <br>
      <label><input type="checkbox" name="tipos[]" value="Muzzarella"> Muzzarella</label>
      <label>Cantidad: <input type="number" name="cant_muzzarella" min="0" value="0"></label>
      <br>
      <label><input type="checkbox" name="tipos[]" value="Jamón y queso"> Jamón y queso</label>
      <label>Cantidad: <input type="number" name="cant_jyq" min="0" value="0"></label>
    </fieldset>

    <button type="submit" class="btn">Confirmar</button>
  </form>
  <a class="btn" href="/guia-php/index.php">Menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
