<?php if(!r::is_ajax()) snippet('header') ?>
<?php snippet('menu') ?>

<?php foreach($page->children()->visible() as $p): ?>

<?php echo snippet('tile', array('p' => $p, 'link' => $p->link())); ?>
<?php endforeach; ?>

<?php if(!r::is_ajax()) snippet('footer') ?>