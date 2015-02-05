<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<h1>Admin panel</h1>
<ul>
	<li><a href=/page/list>Pages</a></li>
	<li><a href=/region/list>Regions</a></li>
	<li><a href=/topmenu/list>Top menu</a></li>
	<li><a href=/config/list>Config</a></li>
	<li><a href=/auth/hash>Passwd hash</a></li>
</ul>
<a href=/auth/logout>Logout</a>

<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>