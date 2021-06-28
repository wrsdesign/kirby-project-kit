<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?= snippet('site/seo') ?>
  <?= snippet('site/icons') ?>

  <?= css('https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css') ?>

  <?php /* ?>
  <?= mix('/css/index.css') ?>
  <?= mix('/js/manifest.js', ['defer' => true]) ?>
  <?= mix('/js/vendor.js', ['defer' => true]) ?>
  <?= mix('/js/index.js', ['defer' => true]) ?>
  <?php */ ?>

  <?php if (!option('debug') and $site->scrips_head()->isNotEmpty()) : ?>
    <?= $site->scrips_head() ?>
  <?php endif; ?>
</head>

<body>
