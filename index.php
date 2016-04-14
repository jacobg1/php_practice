<?php

$entryFile = "entries.json";

if(file_exists($entryFile)){
  $entries = json_decode(file_get_contents($entryFile), true);
}else{
  $entries = [];
}

if(isset($_POST["entry"])){
  $entry = $_POST["entry"];
  $entries[$entry["name"]] = $entry;
  file_put_contents($entryFile, json_encode($entries));
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Phpone Book</title>
  </head>
  <body>
    <h1>Phpone Book</h1>
    <h2>New Entry</h2>
    <pre>
<?php

print_r($entries);

?>
    </pre>
    <form action="#" method="POST">
      <input type="text" name="entry[number]" placeholder="(555)867-5309" />
      <input type="text" name="entry[name]" placeholder="John D. Smith" />
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
