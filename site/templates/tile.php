<?php if(!r::is_ajax()) snippet('header') ?>
<?php snippet('menu') ?>

<?php echo snippet('tile', array('p' => $page, 'link' => $page->link())); ?>

<?php if(!r::is_ajax()) snippet('footer') ?>