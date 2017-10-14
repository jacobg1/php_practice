<?php

  $entryFile = "entries.json";

  if(file_exists($entryFile)) {
    $entries = json_decode(file_get_contents($entryFile), true);
  } else {
    $entries = [];
  }

  if (isset($_POST["do_what"])) {
    $do_what = strtolower($_POST["do_what"])
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Phpone Book</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <h1>Phpone Book</h1>

    <h2>Jenny Jennyson</h2>
    <p>(123)867-5309</p>
    <button>Delete</button>
  </body>
</html>
