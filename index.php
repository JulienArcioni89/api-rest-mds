<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET");

include_once 'functions.php';

$method = $_SERVER['REQUEST_METHOD'];

$scriptPath = str_replace($_SERVER['DOCUMENT_ROOT'], '', $_SERVER['SCRIPT_FILENAME']);
$requestUri = str_replace($scriptPath, '', $_SERVER['REQUEST_URI']);
$url = rtrim($requestUri, '/');

if ($method == 'GET' && preg_match("/\/carnet$/", $url)) {
    get_entries();
} elseif ($method == 'POST' && preg_match("/\/carnet$/", $url)) {
    $data = json_decode(file_get_contents('php://input'), true);
    add_entry($data);
} elseif ($method == 'DELETE' && preg_match("/\/carnet$/", $url)) {
    delete_entries();
} else {
    http_response_code(404);
    echo json_encode(array("message" => "Cette route n'existe pas."));
}
