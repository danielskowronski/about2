<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<h1>Edit topmenu item</h1>

<?php echo Form::open('topmenu/edit/' . $topmenu->id); ?>

<?php echo Form::label('title', "Title"); ?> 
<?php echo Form::input('title', $topmenu->title, array('size'=>'64')); ?> <br/>

<?php echo Form::label('url', "URL"); ?> 
<?php echo Form::input('url', $topmenu->url, array('size'=>'32')); ?> <br/>

<?php echo Form::label('lang', "Language"); ?> 
<?php echo Form::input('lang', $topmenu->lang, array('size'=>'2')); ?> <br/>

<?php echo Form::checkbox('published', 1, (bool) $topmenu->published); ?> 
<?php echo Form::label('published', "Published"); ?> <br/>

<?php echo Form::checkbox('preview', 1, (bool) $topmenu->preview); ?> 
<?php echo Form::label('preview', "Preview only"); ?> <br/>

<br/>
<?php echo Form::submit('save', 'Save'); ?><br/>

<?php echo Form::close(); ?>

<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>