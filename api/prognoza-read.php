<?php
include '../servis/PrognozaServis.php';
echo json_encode($prognozaServis->ucitaj());
