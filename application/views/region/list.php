<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<h1>About2 regions</h1>
<?php echo HTML::anchor('region/edit', 'Create region'); ?><br/>

<table border=1>
<tr><th>region</th><th>title</th><th>lang</th><th>published</th><th>preview only</th><th>edit</th><th>delete</th></tr>
<?php foreach($regions as $region): ?>
<tr>
	<td><?php echo HTML::chars($region->region); ?></td>
	<td><?php echo HTML::chars($region->title); ?></td>
	<td><?php echo HTML::chars($region->lang); ?></td>
	<td><?php echo ($region->published ? "&#10004;" : "&#10008;"); ?> </td>
	<td><?php echo ($region->preview ? "&#10004;" : "&#10008;"); ?> </td>
	<td><?php echo HTML::anchor('region/edit/' . $region->id, 'Edit'); ?></td>
	<td><?php echo HTML::anchor('region/delete/' . $region->id, 'Delete'); ?></td>
</tr>

<?php endforeach; ?>
</table>

<a href=/auth/logout>Logout</a><br />
<a href=/auth/index>Admin panel</a>

<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>