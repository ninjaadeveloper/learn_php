<?php
header("Content-Type: application/json");


if (!isset($_GET['country']) || empty($_GET['country'])) {
    echo json_encode(['error' => 'Country parameter is required.']);
    http_response_code(400);
    exit;
}

$country = urlencode(trim($_GET['country']));
$api_url = "http://universities.hipolabs.com/search?country={$country}";


$response = file_get_contents($api_url);

if ($response === FALSE) {
    echo json_encode(['error' => 'Failed to fetch data from the API.']);
    http_response_code(500);
    exit;
}


echo $response;
