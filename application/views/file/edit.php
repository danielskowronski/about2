<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<h1>Edit file</h1>

<?php echo Form::open('fileadm/edit/' . $file->id, array("enctype"=>"multipart/form-data")); ?>

<?php echo Form::label('title', "Title"); ?> 
<?php echo Form::input('title', $file->title, array('size'=>'32')); ?> <br/>

<?php echo Form::label('url', "URL"); ?>
<?php echo Form::input('url', $file->url, array('size'=>'32')); ?> <br/>

<?php echo Form::checkbox('published', 1, (bool) $file->published); ?> 
<?php echo Form::label('published', "Published"); ?> <br/>

<?php echo Form::file('body', $file->body, array("type"=>"file")); ?> <br/>

<br/>
<?php echo Form::submit('save', 'Save'); ?><br/>

<?php echo Form::close(); ?>

<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>