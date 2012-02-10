<h4 id="section-title">Description</h4>
<?php print render($content['body']); ?>

<h4 id="section-title">Roadmaps</h4>
<?php print views_embed_view("roadmaps", "default", $node->nid); ?>