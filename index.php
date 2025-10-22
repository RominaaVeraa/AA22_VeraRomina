<?php require __DIR__ . '/includes/header.php'; ?>
<div class="card">
  <h2>Menú de actividades (4 a 18)</h2>
  <p>El listado se genera automáticamente con los archivos de <code>/php</code>.</p>
  <ul>
    <?php
      $dir = __DIR__ . '/php';
      if (!is_dir($dir)) { echo "<li>No existe la carpeta /php</li>"; }
      else {
        $files = glob($dir . '/*.php');
        usort($files, function($a,$b){
          $an = basename($a); $bn = basename($b);
          preg_match('/^\d+/', $an, $ma); $na = $ma ? (int)$ma[0] : PHP_INT_MAX;
          preg_match('/^\d+/', $bn, $mb); $nb = $mb ? (int)$mb[0] : PHP_INT_MAX;
          return $na <=> $nb ?: strcmp($an, $bn);
        });
        foreach ($files as $f) {
          $name = basename($f);
          $label = preg_replace('/^\d+_?/', '', $name);
          $label = str_replace(['.php','_'], ['',' '], $label);
          echo '<li><a href="php/' . htmlspecialchars($name) . '">' .
               htmlspecialchars($name) . ' — ' . ucfirst($label) . '</a></li>';
        }
      }
    ?>
  </ul>
</div>
<?php require __DIR__ . '/includes/footer.php'; ?>
