<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<h1>Config</h1>
<br />
<table id="list">
<tr><th>name</th><th>value</th><th>description</th><th>change</th></tr>
<?php foreach($configs as $config): ?>
<tr>
	<td><?php echo HTML::chars($config->name); ?></td>
	<td><?php echo HTML::chars($config->value); ?></td>
	<td><?php echo HTML::chars($config->description); ?></td>
	<td><?php echo HTML::anchor('config/edit/' . $config->name, 'Edit'); ?></td>
</tr>
<?php endforeach; ?>
</table>

<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>