<?php 

include 'arena.php';

$arena = new Arena();

$item = $arena->get_block($_GET['id']);

?>

<!DOCTYPE html>
<html>
  <head>
    <title><?= $channel->title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="assets/css/app.css" type="text/css">
  </head>
  <body>

    <div class="display">
      <div class="theater">
        <div class="stage" onclick="history.back()">
          
          <?php if($item->is_image()) { ?>
            <a class="image" href="<?= $item->image_url('original') ?>">
              <img src="<?= $item->image_url('display') ?>" />
            </a>
            <div class="title">
              
              <?php if (!($item->generated_title == ' ')): ?>
                <h3><?= $item->generated_title ?></h3>
              <?php endif; ?>
              <?= $item->description_html ?>
            </div>
          <?php } ?>

          <?php if($item->is_embed()){ ?>
            <div class="blog-post-entry-content">
              <?= $item->embed['html'] ?>
            </div>
            <div class="title">
              <?= $item->description_html ?>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </body>
</html>