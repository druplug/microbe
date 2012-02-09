
<?php
// Experimental
?>
<?php print drupal_render_children($form['form_build_id']); ?>
<div class="grid-10 clearfix">   
<?php print drupal_render_children($form['field_title']); ?>

<?php print drupal_render_children($form['field_project']); ?>

<?php print drupal_render_children($form['field_type']); ?>

<?php print drupal_render_children($form['field_status']); ?>

<?php print drupal_render_children($form['field_roadmap']); ?>

<?php print drupal_render_children($form['field_priority']); ?>

<?php print drupal_render_children($form['field_tags']); ?>

<?php print drupal_render_children($form['field_attachments']); ?>
</div>

<div class="grid-14 clearfix">
<?php print drupal_render_children($form['body']); ?>
</div>

<div class="grid-10 clearfix">   
<?php print drupal_render_children($form['field_screenshots']); ?>

<?php print drupal_render_children($form['field_assign_to']); ?>

<?php print drupal_render_children($form['field_estimated_time']); ?>

<?php print drupal_render_children($form['field_subtasks']); ?>
</div>

<div class="grid-10 clearfix">   
<?php print drupal_render_children($form['actions']); ?>
</div>