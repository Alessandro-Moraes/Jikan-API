<?php include('./jikan.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <title>P2 - API Jikan</title>
</head>

<body>
  <div class="input">
    <img class="imgLogo" src="images/logo.png" alt="logo W. animes">

    <form action="" method="post">
      <div>
        <input name="anime" type="text" placeholder=" Please enter a title">
        <button name="btSearch" class="btSearch" type="submit">Search</button>
      </div>

      <div class="gridFilter">
        <p class="filter">Filter:</p>
        <select class="options" name="type" id="">
          <option value="anime" selected>Anime</option>
          <option value="manga">Mangá</option>
        </select>
      </div>

    </form>
  </div>

  <div class="container">

    <?php if (isset($animes)) {      
      foreach ($animes->results as $value) { ?>
        <div class="card">
          <div class='imgBox'>
            <img src="<?php echo $value->image_url; ?>" alt="imagem ilustrativa do anime pesquisado">
          </div>
          <div class="content">
            <h2><?php echo $value->title; ?></h2>
            <p class="description"><?php echo $value->synopsis; ?></p>
            <p class="seeMore" name="seeMore"><a href="<?php echo $typeFilter . $value->mal_id; ?>">see more...</a></p>
          </div>
        </div>
    <?php }
    } ?>

  </div>

</body>

</html>