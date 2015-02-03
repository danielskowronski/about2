<h1>Kohana blog demo</h1>
<?php echo HTML::anchor('post/edit', 'Create post'); ?><br/>

<?php foreach($posts as $post): ?>

<h2><?php echo HTML::chars($post->title); ?></h2>
<p><?php echo HTML::chars($post->text); ?></p>
<?php echo HTML::anchor('post/edit/' . $post->id, 'Edit'); ?><br/>
<?php echo HTML::anchor('post/delete/' . $post->id, 'Delete'); ?>

<?php endforeach; ?>