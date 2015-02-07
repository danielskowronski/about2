<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<h1>List regions</h1>
<?php echo HTML::anchor('region/edit', 'Create region'); ?><br/>
<br />
<table id="list">
<tr><th>region</th><th>lang</th><th>published</th><th>preview<br />only</th><th>edit</th><th>delete</th></tr>
<?php foreach($regions as $region): ?>
<tr>
	<td><?php echo HTML::chars($region->region); ?></td>
	<td><?php echo HTML::chars($region->lang); ?></td>
	<td><?php echo ($region->published ? "&#10004;" : "&#10008;"); ?> </td>
	<td><?php echo ($region->preview ? "&#10004;" : "&#10008;"); ?> </td>
	<td><?php echo HTML::anchor('region/edit/' . $region->id, 'Edit'); ?></td>
	<td><?php echo HTML::anchor('region/delete/' . $region->id, 'Delete', array("onclick"=>"return confirm('Are you sure?')")); ?></td>
</tr>

<?php endforeach; ?>
</table>


<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>