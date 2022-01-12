<?php
include '../servis/PrognozaServis.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  echo "Pogresna metoda";
  exit;
}

try {
  $prognozaServis->kreiraj($_POST);
  echo "uspesno kreirana prognoza";
} catch (Exception $ex) {
  echo $ex->getMessage();
}
