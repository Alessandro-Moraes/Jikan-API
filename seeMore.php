<?php

$getUrl = explode('/', $_SERVER['REQUEST_URI']);
$getType = explode('.', $getUrl[2]);

$id = explode('=', $_SERVER['REQUEST_URI']);

$apiPage = "https://api.jikan.moe/v3/$getType[0]/{$id[1]}";

$animePage = json_decode(file_get_contents($apiPage));
