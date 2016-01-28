<?php 

/*

Trying to make a "four random blocks" splash page...

*/

include 'arena.php';

$arena = new Arena();
$slug = 'blend-is-beautiful'; // channel slug (e.g. http://are.na/interesting-menu)
$channel = $arena->get_channel($slug);

$input = $channel->contents;
$new_input = array_rand($input);

$selected_elements = [];
// for ($i = 0; $i < count($new_input); ++i) {
//   array_push($selected_elements, $input[$new_input[$i]])
// }

?>

<!DOCTYPE html>
<html>
  <head>
    <title><?= $channel->title; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="assets/css/app.css" type="text/css">
  </head>
  <body class="home">

    <div class="images">

      <?php print_r($input) ?>

      <?php $channel->each_item(function($item) {?>
            
        <?php if($item->is_image()) { ?>
          <a class="image" href="<?= $item->image_url('original') ?>">
            <img src="<?= $item->image_url('display') ?>" />
          </a>
        <?php } ?>

        <?php if($item->is_embed()){ ?>
          <div class="blog-post-entry-content">
            <?= $item->embed['html'] ?>
          </div>
        <?php } ?>

      <?php }); ?>

    </div>

  </body>
</html>