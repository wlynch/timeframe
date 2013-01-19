<?php
try {
  $m = new Mongo(); // connect
  $db = $m->selectDB("Insert db name in quotes");
}
catch ( MongoConnectionException $e ) {
  echo '<p>Couldn\'t connect to mongodb.</p>';
  exit();
}
?>
