<?php
  $db = new PDO('mysql:host=localhost;dbname=training-day-6', 'training-day-6', 'training-day-6');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

?>