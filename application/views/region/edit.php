<?php require(dirname(__FILE__)."/../_skel_admin/header.php"); ?>

<h1>Edit region</h1>

<?php echo Form::open('region/edit/' . $region->id); ?><br/>

<?php echo Form::label('region', "region name"); ?> <br/>
<?php echo Form::input('region', $region->region); ?> <br/>

<?php echo Form::label('title', "Title"); ?> <br/>
<?php echo Form::input('title', $region->title); ?> <br/>

<?php echo Form::label('body', "Body"); ?> <br/>
<?php echo Form::textarea('body', $region->body); ?> <br/>

<?php echo Form::label('lang', "region lang"); ?> <br/>
<?php echo Form::input('lang', $region->lang); ?> <br/>

<?php echo Form::checkbox('published', 1, (bool) $region->published); ?> 
<?php echo Form::label('published', "Published"); ?> <br/>

<?php echo Form::checkbox('preview', 1, (bool) $region->preview); ?> 
<?php echo Form::label('preview', "preview only"); ?> <br/>

<br/>
<?php echo Form::submit('save', 'Save'); ?><br/>

<?php echo Form::close(); ?>

<?php require(dirname(__FILE__)."/../_skel_admin/footer.php"); ?>