<?php

include 'arena.php';
$arena = new Arena();
$slug = 'blend-is-beautiful';
$channel = $arena->get_channel($slug);
$input = $channel->contents;

$new_input = array_rand($input,4);
$selected_elements = [];
for ($i = 0; $i < count($new_input); ++$i) {
   array_push($selected_elements, $input[$new_input[$i]]);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title><?= $channel->title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="assets/css/app.css" type="text/css">
  </head>
  <body class="home">

    <nav id="options">
      <a href="index.php" class="current">Blend</a>
      <a href="catalog.php">Catalog</a>
    </nav>

    <div class="images">
      <?php foreach($selected_elements as $item) {?>
            
        <?php if($item->is_image()) { ?>
          <a class="image" href="lightbox.php?id=<?= $item->id ?> ">
            <img src="<?= $item->image_url('display') ?>" />
          </a>
        <?php } ?>

        <?php if($item->is_embed()){ ?>
          <div class="video">
            <?= $item->embed['html'] ?>
          </div>
        <?php } ?>

      <?php } ?>

    </div>

  </body>
</html>