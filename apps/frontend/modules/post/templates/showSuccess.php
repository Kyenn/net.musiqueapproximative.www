<p><?php echo $post->body ?></p>
<p>
  <a href="<?php echo $sf_request->getRelativeUrlRoot() ?>/music/<?php echo $post->track_filename ?>"><?php echo $post->track_author ?> - <?php echo $post->track_title ?></a></p>
</p>

<?php if ($post_previous): ?>
  <p><?php echo link_to('Previous', '@post_show?id='.$post_previous->id) ?></p>
<?php endif; ?>

<?php if ($post_next): ?>
  <p><?php echo link_to('Next', '@post_show?id='.$post_next->id) ?></p>
<?php endif; ?>