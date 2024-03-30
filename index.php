<?php require_once __DIR__ . "/vendor/autoload.php"; ?>
<?php
$text = new \App\Service\Text();
$textItem = $text->randomSingle(['text']);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($textItem);