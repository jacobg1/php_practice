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

if(isset($_POST["entry"])){
  print_r($_POST["entry"]);
}

?>
    </pre>
    <form action="#" method="POST">
      <input type="text" name="entry[number]" placeholder="(555)867-5309" />
      <input type="text" name="entry[name]" placeholder="John D. Smith" />
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
