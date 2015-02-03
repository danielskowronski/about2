<h1>About2 entries</h1>
<?php echo HTML::anchor('page/edit', 'Create page'); ?><br/>

<table border=1>
<tr><th>id</th><th>url</th><th>title</th><th>published</th><th>edit</th><th>delete</th></tr>
<?php foreach($pages as $page): ?>
<tr>
	<td><?php echo HTML::chars($page->id); ?></td>
	<td><?php echo HTML::chars($page->url); ?></td>
	<td><?php echo HTML::chars($page->title); ?></td>
	<td><?php echo ($page->published ? "&#10004;" : "&#10008;"); ?> </td>
	<td><?php echo HTML::anchor('page/edit/' . $page->id, 'Edit'); ?></td>
	<td><?php echo HTML::anchor('page/delete/' . $page->id, 'Delete'); ?></td>
</tr>

<?php endforeach; ?>