<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'php_crud_mysql'
) or die(mysqli_erro($mysqli));

?>
