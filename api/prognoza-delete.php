<?php
include '../servis/PrognozaServis.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  echo "Pogresna metoda";
  exit;
}

try {
  $prognozaServis->obrisi($_POST['id']);
  echo "uspesno obrisana prognoza";
} catch (Exception $ex) {
  echo $ex->getMessage();
}
