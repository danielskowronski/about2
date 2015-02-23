<!DOCTYPE html>
<!--[if !IE]><!-->
<!--

    ___            ___
   /   \          /   \
   \_   \        /  __/
    _\   \      /  /__
    \___  \____/   __/
        \_       _/
          | @ @  \_
          |
        _/     /\
       /o)  (o/\ \_
       \_____/ /
         \____/
     
-->
<!--<![endif]-->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <title><?php echo HTML::chars($page->title); ?> - <?= $page_name; ?></title>
  <style>
      body {
        padding-top: 50px;
      }
      .starter-template {
        padding: 40px 15px;
        text-align: center;
      }
    </style>
    <?php require(dirname(__FILE__)."/langsel.php"); ?>
</head>
<body>

<?php langsel_showLangalert(); ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href=""><?= $page_name; ?></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <?php foreach($top_menus as $top_menu): ?>
        <?php if (! $top_menu->published) continue; ?>
        <li><a href="<?php echo $top_menu->url; ?>"><?php echo $top_menu->title; ?></a></li>
        <?php endforeach; ?>
        <li><?php langsel_showButtons(); ?></li>
      </ul>
    </div>
  </div>
</nav>

<header class="header">
  <?php echo $section_header; ?>
</header>

<div class="container">