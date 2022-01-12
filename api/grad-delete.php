<?php
include '../servis/GradServis.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  echo "Pogresna metoda";
  exit;
}

try {
  $gradServis->obrisi($_POST['id']);
  echo "uspesno obrisan grad";
} catch (Exception $ex) {
  echo $ex->getMessage();
}
