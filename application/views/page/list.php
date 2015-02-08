<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<h1>List pages</h1>
<?php echo HTML::anchor('page/edit', 'Create page'); ?><br/>
<br />
<table id="list">	
<tr><th>id</th><th>url</th><th>lang</th><th>title</th><th>published</th><th>preview<br />only</th><th>edit</th><th>delete</th></tr>

<?php foreach($pages as $page): ?>
<tr>
	<td><?php echo HTML::chars($page->id); ?></td>
	<td><a href="/<?php echo HTML::chars($page->url); ?>"><?php echo HTML::chars($page->url); ?></a></td>
	<td><?php echo HTML::chars($page->lang); ?></td>
	<td><?php echo HTML::chars($page->title); ?></td>
	<td><?php echo ($page->published ? "&#10004;" : "&#10008;"); ?> </td>
	<td><?php echo ($page->preview ? "&#10004;" : "&#10008;"); ?> </td>
	<td><?php echo HTML::anchor('page/edit/' . $page->id, 'Edit'); ?></td>
	<td><?php echo HTML::anchor('page/delete/' . $page->id, 'Delete', array("onclick"=>"return confirm('Are you sure?')")); ?></td>
</tr>
<?php endforeach; ?>
</table>

<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>