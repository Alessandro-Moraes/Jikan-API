<?php

if (isset($_POST['btSearch'])) {
  $anime = $_POST['anime'];
  $anime = str_replace(' ', '', $anime);

  $type = $_POST['type'];

  getApiJikan();

  $typeFilter = ($type == 'anime') ? 'anime.php?mal_id=' : 'manga.php?mal_id=';
}

function getApiJikan() {
  global $type;
  global $anime;
  global $animes;

  $url = "https://api.jikan.moe/v3/search/{$type}?q={$anime}";

  $animes = json_decode(file_get_contents($url));
}
