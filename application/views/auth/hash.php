<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<?php if ($hash===NULL): ?>
	<form method=post><input type=password name=passwd /><button type=submit>get hash</button></form>
<?php else: ?>
	<h1><?= $hash ?></h1>
<?php endif; ?>

<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>