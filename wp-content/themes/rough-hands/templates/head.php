<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>

  <!-- Inject hero image into page CSS, if it exists -->
  <?php if (has_post_thumbnail($post)) : $hero = get_the_post_thumbnail_url($post, 'full'); ?>
    <style type="text/css">
      #page-hero {
        background-image: url('<?=$hero?>');
      }
    </style>
  <?php endif; ?>
</head>
