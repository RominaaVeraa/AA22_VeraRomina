<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>12 – Formulario (select ingresos)</h2>
  <form action="12_procesar.php" method="post">
    <p><label>Nombre: <input type="text" name="nombre" required></label></p>
    <p><label>Ingresos mensuales:
      <select name="rango" required>
        <option value="">-- Seleccionar --</option>
        <option value="1">1–1000</option>
        <option value="2">1001–3000</option>
        <option value="3">> 3000</option>
      </select>
    </label></p>
    <button type="submit" class="btn">Enviar</button>
  </form>
  <a class="btn" href="/guia-php/index.php">Menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
