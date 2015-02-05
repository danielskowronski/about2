<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<h1>About2 topmenus</h1>
<?php echo HTML::anchor('topmenu/edit', 'Create topmenu'); ?><br/>

<table border=1>
<tr><th>id</th><th>title</th><th>lang</th><th>url</th><th>published</th><th>preview only</th><th>edit</th><th>delete</th></tr>
<?php foreach($topmenus as $topmenu): ?>
<tr>
	<td><?php echo HTML::chars($topmenu->id); ?></td>
	<td><?php echo HTML::chars($topmenu->title); ?></td>
	<td><?php echo HTML::chars($topmenu->lang); ?></td>
	<td><?php echo HTML::chars($topmenu->url); ?></td>
	<td><?php echo ($topmenu->published ? "&#10004;" : "&#10008;"); ?> </td>
	<td><?php echo ($topmenu->preview ? "&#10004;" : "&#10008;"); ?> </td>
	<td><?php echo HTML::anchor('topmenu/edit/' . $topmenu->id, 'Edit'); ?></td>
	<td><?php echo HTML::anchor('topmenu/delete/' . $topmenu->id, 'Delete'); ?></td>
</tr>

<?php endforeach; ?>
</table>

<a href=/auth/logout>Logout</a><br />
<a href=/auth/index>Admin panel</a>

<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>