<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<h1>List files</h1>
<?php echo HTML::anchor('fileadm/edit', 'Upload new file'); ?><br/>
<br />
<table id="list">
<tr><th>id</th><th>title</th><th>content<br />type</th><th>url</th><th>published</th><th>edit</th><th>delete</th></tr>
<?php foreach($files as $file): ?>
<tr>
	<td><?php echo HTML::chars($file->id); ?></td>
	<td><?php echo HTML::chars($file->title); ?></td>
	<td><?php echo HTML::chars($file->contentType); ?></td>
	<td><a href="/files/<?php echo HTML::chars($file->url); ?>"><?php echo HTML::chars($file->url); ?></a></td>
	<td><?php echo ($file->published ? "&#10004;" : "&#10008;"); ?> </td>
	<td><?php echo HTML::anchor('fileadm/edit/' . $file->id, 'Edit'); ?></td>
	<td><?php echo HTML::anchor('fileadm/delete/' . $file->id, 'Delete', array("onclick"=>"return confirm('Are you sure?')")); ?></td>
</tr>

<?php endforeach; ?>
</table>

<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>