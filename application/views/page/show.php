<?php require(dirname(__FILE__)."/../_skel/header.php"); ?>
  <h1><?php echo HTML::chars($page->title); ?></h1>
  <?php echo $page->body; ?>
<?php require(dirname(__FILE__)."/../_skel/footer.php"); ?>