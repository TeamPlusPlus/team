<?php if(!r::is('ajax')) snippet('header') ?>
<?php snippet('menu') ?>

<?php foreach($page->children()->visible() as $p): ?>

<?php echo snippet('project', array('p' => $p, 'link' => $p->link())); ?>
<?php endforeach; ?>

<?php if(!r::is('ajax')) snippet('footer') ?>
