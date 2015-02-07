<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<?php if ($login_failed === true): ?>
	<h1>Login failed!</h1>
<?php endif; ?>

<form method=post>
Login: <input type=text name=login />
Passwd: <input type=password name=passwd />
<button type=submit>Login</button>
</form>

<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>