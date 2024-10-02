<?php
  // update_table_data.php

  // get posted data
  $data = $_POST['data'];

  // open file in write mode to overwrite
  $fp = fopen("table.txt", "w+");

  // optional: write header row if needed (remove this if not needed)
  // fwrite($fp, "Item ID|Item Name|Description|Price|Stock\n");

  // write data rows
  foreach ($data as $item) {
    fwrite($fp, $item["Item ID"] . "|" . $item["Item Name"] . "|" . $item["Description"] . "|" . $item["Price"] . "|" . $item["Stock"] . "\n");
  }

  // close file
  fclose($fp);
?>
