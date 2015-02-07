<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<h1>Edit page</h1>

<?php echo Form::open('page/edit/' . $page->id); ?>

<?php echo Form::label('title', "Title"); ?> 
<?php echo Form::input('title', $page->title, array('size'=>'64')); ?> <br/>

<?php echo Form::label('body', "Body"); ?> <br/>
<?php echo Form::textarea('body', $page->body); ?> <br/>

<?php echo Form::label('url', "URL"); ?>
<?php echo Form::input('url', $page->url, array('size'=>'32')); ?> <br/>

<?php echo Form::checkbox('published', 1, (bool) $page->published); ?> 
<?php echo Form::label('published', "Published"); ?> <br/>

<?php echo Form::checkbox('preview', 1, (bool) $page->preview); ?> 
<?php echo Form::label('preview', "Preview only"); ?> <br/>


<?php echo Form::label('lang', "Language"); ?>
<?php echo Form::input('lang', $page->lang, array('size'=>'2')); ?> <br/>

<br/>
<?php echo Form::submit('save', 'Save'); ?><br/>

<?php echo Form::close(); ?>

<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>