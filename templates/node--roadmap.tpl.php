<?php print render($content['field_project']); ?>
<?php print render($content['field_start_date']); ?>

<h4 id="section-title">Issues</h4>
<?php print views_embed_view("roadmap_issues", "default", $node->nid); ?>