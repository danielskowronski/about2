<h1>Edit page</h1>

<?php echo Form::open('page/edit/' . $page->id); ?><br/>
<?php echo Form::label('title', "Title"); ?> <br/>
<?php echo Form::input('title', $page->title); ?> <br/>

<?php echo Form::label('body', "Body"); ?> <br/>
<?php echo Form::textarea('body', $page->body); ?> <br/>

<?php echo Form::label('url', "URL"); ?> <br/>
<?php echo Form::input('url', $page->url); ?> <br/>

<?php echo Form::checkbox('published', 1, (bool) $page->published); ?> 
<?php echo Form::label('published', "Published"); ?> <br/>

<br/>
<?php echo Form::submit('save', 'Save'); ?><br/>

<?php echo Form::close(); ?>