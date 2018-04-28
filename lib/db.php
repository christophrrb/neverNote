<?php
  # this line ensures that PHP will not complain when you use date functions
  date_default_timezone_set('America/New_York');
  setlocale(LC_ALL, 'en_US.UTF-8');
  # remember to use the username/password for your database
  $conn = new mysqli('localhost','root','','noteapp');
?>
