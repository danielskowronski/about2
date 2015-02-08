<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<h1>Edit config of <em><?php echo $config->name; ?></em></h1>

<?php echo Form::open('config/edit/' . $config->name); ?>

<?php echo Form::label('value', "Config entry value"); ?>
<?php echo Form::input('value', $config->value, array('size'=>'64')); ?> <br/>

<?php echo Form::label('description', "Config entry description"); ?><br />
<?php echo Form::textarea('description', $config->description); ?> <br/>

<br/>
<?php echo Form::submit('save', 'Save'); ?><br/>

<?php echo Form::close(); ?>

<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>