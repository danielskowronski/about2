<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<h1>Edit topmenu</h1>

<?php echo Form::open('topmenu/edit/' . $topmenu->id); ?><br/>

<?php echo Form::label('title', "topmenu title"); ?> <br/>
<?php echo Form::input('title', $topmenu->title); ?> <br/>

<?php echo Form::label('url', "url"); ?> <br/>
<?php echo Form::input('url', $topmenu->url); ?> <br/>

<?php echo Form::label('lang', "topmenu lang"); ?> <br/>
<?php echo Form::input('lang', $topmenu->lang); ?> <br/>

<?php echo Form::checkbox('published', 1, (bool) $topmenu->published); ?> 
<?php echo Form::label('published', "Published"); ?> <br/>

<?php echo Form::checkbox('preview', 1, (bool) $topmenu->preview); ?> 
<?php echo Form::label('preview', "preview only"); ?> <br/>

<br/>
<?php echo Form::submit('save', 'Save'); ?><br/>

<?php echo Form::close(); ?>

<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>