<?php

$entryFile = "entries.json";

if(file_exists($entryFile)){
  $entries = json_decode(file_get_contents($entryFile), true);
}else{
  $entries = [];
}

if(isset($_POST["do_what"])){
  $do_what = strtolower($_POST["do_what"]);
  if($_POST["entry"]){
    $entry = $_POST["entry"];
    if($do_what === "save"){
      $entries[$entry["name"]] = $entry;
    }else if($do_what === "delete"){
      unset($entries[$entry["name"]]);
    }
  }
  file_put_contents($entryFile, json_encode($entries));
  header("Location: #");
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
<?php

foreach($entries as $entry){
  echo <<<HTML
    <h2>{$entry["name"]}</h2>
    <p>{$entry["number"]}</p>
    <form action="#" method="POST">
      <input type="hidden" name="do_what" value="delete" />
      <input type="hidden" name="entry[name]" value="{$entry["name"]}" />
      <button type="submit">Delete</button>
    </form>
HTML;
}

?>
    <h2>New Entry</h2>
    <form action="#" method="POST">
      <input type="hidden" name="do_what" value="save" />
      <input type="text" name="entry[number]" placeholder="(555)867-5309" />
      <input type="text" name="entry[name]" placeholder="John D. Smith" />
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
