<?php require __DIR__ . '/../includes/header.php'; ?>
<div class="card">
  <h2>18 – Función: comparar claves</h2>

  <form action="" method="post">
    <p><label>Usuario: <input type="text" name="usuario" required></label></p>
    <p><label>Clave: <input type="password" name="clave1" required></label></p>
    <p><label>Repetir clave: <input type="password" name="clave2" required></label></p>
    <button type="submit" class="btn">Verificar</button>
  </form>

  <?php
    // Implementamos la función pedida
    function comparar_claves($c1, $c2) {
      return $c1 === $c2;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $usuario = trim($_POST['usuario'] ?? '');
      $c1 = $_POST['clave1'] ?? '';
      $c2 = $_POST['clave2'] ?? '';

      if ($usuario === '') {
        echo "<p>Usuario inválido.</p>";
      } else {
        if (comparar_claves($c1, $c2)) {
          echo "<p>Las claves ingresadas por <strong>" . htmlspecialchars($usuario) . "</strong> <strong>coinciden</strong>.</p>";
        } else {
          echo "<p>Las claves ingresadas por <strong>" . htmlspecialchars($usuario) . "</strong> <strong>son distintas</strong>.</p>";
        }
      }
    }
  ?>

  <a class="btn" href="/guia-php/index.php">Menú</a>
</div>
<?php require __DIR__ . '/../includes/footer.php'; ?>
