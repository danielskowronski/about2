<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<h1>List topmenu items</h1>
<?php echo HTML::anchor('topmenu/edit', 'Create topmenu'); ?><br/>
<br />
<table id="list">
<tr><th>id</th><th>title</th><th>lang</th><th>url</th><th>published</th><th>preview<br />only</th><th>edit</th><th>delete</th></tr>
<?php foreach($topmenus as $topmenu): ?>
<tr>
	<td><?php echo HTML::chars($topmenu->id); ?></td>
	<td><?php echo HTML::chars($topmenu->title); ?></td>
	<td><?php echo HTML::chars($topmenu->lang); ?></td>
	<td><a href="<?php echo HTML::chars($topmenu->url); ?>"><?php echo HTML::chars($topmenu->url); ?></a></td>
	<td><?php echo ($topmenu->published ? "&#10004;" : "&#10008;"); ?> </td>
	<td><?php echo ($topmenu->preview ? "&#10004;" : "&#10008;"); ?> </td>
	<td><?php echo HTML::anchor('topmenu/edit/' . $topmenu->id, 'Edit'); ?></td>
	<td><?php echo HTML::anchor('topmenu/delete/' . $topmenu->id, 'Delete', array("onclick"=>"return confirm('Are you sure?')")); ?></td>
</tr>

<?php endforeach; ?>
</table>

<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>