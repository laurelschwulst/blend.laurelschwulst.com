<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'arena.php';

$arena = new Arena();

$page = $arena->set_page(); // this checks if page is set, if not sets page to 1
$per = 24; // how many items per page
$slug = 'blend-is-beautiful'; // channel slug (e.g. http://are.na/arena-influences)

$channel = $arena->get_channel($slug, array('page' => $page, 'per' => $per));

?>

<!DOCTYPE html>
<html>
  <head>
    <title><?= $channel->title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="assets/css/app.css" type="text/css">
  </head>
  <body>

    <nav id="options">
      <a href="index.php">Blend</a>
      <a href="catalog.php" class="current">Catalog</a>
    </nav>
    
    <!-- pagination goes here -->

    <div class="container">

      <!-- start looping through channel items and provide each type of block -->
      <!-- (image, embed, link, text, attachment, channel) with a template -->

      <div class="images">

      <?php $channel->each_item(function($item) {?>
          
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

      <?php }); ?>

      </div>

      <!-- end channel loop -->

      <p class="ltb"></p>

      <!-- pagination goes here -->

    </div>
  </body>
</html>