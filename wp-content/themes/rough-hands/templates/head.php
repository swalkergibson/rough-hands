<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Inject hero image into page CSS, if it exists -->
  <?php if (has_post_thumbnail($post)) : $hero = get_the_post_thumbnail_url($post, 'full'); ?>
    <style type="text/css">
      body {
        background-image: url('<?=$hero?>');
        background-color: transparent;
        background-repeat: no-repeat;
        background-position: center 0;
      }
    </style>
  <?php endif; ?>

  <?php wp_head(); ?>
</head>
