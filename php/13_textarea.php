<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>13 – Formulario (textarea – contrato)</h2>
  <p>Modificá los campos entre corchetes <code>[...]</code> y enviá.</p>
  <form action="13_procesar.php" method="post">
<textarea name="contrato" rows="12" style="width:100%" required>
En la ciudad de [..........], se acuerda entre la Empresa [..........]
representada por el Sr. [..........] en su carácter de Apoderado,
con domicilio en la calle [..........] y el Sr. [..........],
futuro empleado con domicilio en [..........], celebrar el presente
contrato a Plazo Fijo, de acuerdo a la normativa vigente de los
artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.
</textarea>
    <button type="submit" class="btn">Mostrar</button>
  </form>
  <a class="btn" href="/guia-php/index.php">Menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
