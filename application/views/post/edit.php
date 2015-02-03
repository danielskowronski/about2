<h1>Edit post</h1>

<?php echo Form::open('post/edit/' . $post->id); ?><br/>
<?php echo Form::label('title', "Title"); ?> <br/>
<?php echo Form::input('title', $post->title); ?> <br/>
<?php echo Form::label('text', "Text"); ?> <br/>
<?php echo Form::textarea('text', $post->text); ?> <br/>
<br/>
<?php echo Form::submit('save', 'Save'); ?><br/>

<?php echo Form::close(); ?>