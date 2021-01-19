<?php
  $name = $_GET["name"];
  $word = "ciao " . $name;
  $lengthWord = strlen($word);
  $replaceWord = str_replace($name, "***", $word);
?>
