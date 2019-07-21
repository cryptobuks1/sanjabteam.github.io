<?php
/**
 * Get images from unsplash API and put to json file.
 *
 * https://github.com/sanjabteam/sanjabteam
 */

$curl = curl_init();

$config = require_once "config.php";

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.unsplash.com/users/amir9480/likes",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "Accept: application/json",
        "Accept-Version: v1",
        "Authorization: Client-ID ".$config['client_id'],
        "Cache-Control: no-cache",
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $images = json_decode($response, true);
    foreach ($images as $key => $image) {
        $images[$key] = [
            'author' => $image['user']['name'],
            'link' => $image['links']['html'],
            'image' => $image['urls']['regular'],
        ];
    }
    $file = fopen('images.json', 'w');
    fwrite($file, json_encode($images, JSON_PRETTY_PRINT));
    fclose($file);
}
echo "Response saved in images.json";
