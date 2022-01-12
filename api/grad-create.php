<?php
include '../servis/GradServis.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  echo "Pogresna metoda";
  exit;
}

try {
  $gradServis->kreiraj($_POST);
  echo "uspesno kreiran grad";
} catch (Exception $ex) {
  echo $ex->getMessage();
}
