<?php
  // index.php (or any other server-side script)

  $file1 = $_POST['file1'];
  $file2 = $_POST['file2'];

  $file1_content = file_get_contents($file1);
  $file2_content = file_get_contents($file2);

  echo "<h2>File 1: $file1</h2><pre>$file1_content</pre>";
  echo "<h2>File 2: $file2</h2><pre>$file2_content</pre>";
?>