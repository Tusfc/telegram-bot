<?php
$bot_token = '5967058104:AAEg_F3p-cl7vQM6OY0TRKH0m9gwir8AaI0';
$bot_url = "https://api.telegram.org/bot" . $bot_token . "/";
$userId = -884879172;



$url = $bot_url."sendmessage?chat_id=".$userId."&text=.Maui is awesome!";
$response = file_get_contents($url);


?>