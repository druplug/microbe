<div>
 Custom content type override in Drupal 7
</div>

<!--Print the title input field-->
<div>   
<?php print drupal_render_children($form['field_title']); ?>
</div>

<!--Print the body input field-->

<div>
<?php print drupal_render_children($form['body']); ?>
</div>
