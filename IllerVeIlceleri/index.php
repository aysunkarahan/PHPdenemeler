<?php
require_once 'turkiye.php';
$elma = new Turkiye();
header('Content-Type: application/json');
echo json_encode(array($elma->json_yap()));
