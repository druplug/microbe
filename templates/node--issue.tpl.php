<div class="container-10 clearfix">
    <a href="<?php print $node_url; ?>" class="issue-title"><?php print render($content['field_title']); ?></a>
</div>
<?php print render($content['field_project']); ?>
<?php print render($content['field_roadmap']); ?>
<?php print render($content['field_type']); ?>
<?php print render($content['field_status']); ?>
<?php print render($content['field_priority']); ?>
<?php print render($content['field_assign_to']); ?>
<?php print render($content['field_subtasks']); ?>
<?php print render($content['field_estimated_time']); ?>
<?php print render($content['field_actual_time']); ?>
<?php print render($content['field_tags']); ?>
<h4 id="section-title">Description</h4>
<?php print render($content['body']); ?>

<?php print render($content['field_attachments']); ?>
<?php print render($content['field_screenshots']); ?>

<?php print render($content['comments']); ?>
