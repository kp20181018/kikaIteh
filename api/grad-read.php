<?php
include '../servis/GradServis.php';
echo json_encode($gradServis->ucitaj(isset($_GET['naziv']) ? $_GET['naziv'] : ''));
