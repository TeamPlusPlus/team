<?php if(!r::is('ajax')) snippet('header') ?>
<?php snippet('menu') ?>

<?php echo snippet('project', array('p' => $page, 'link' => $page->link())); ?>

<?php if(!r::is('ajax')) snippet('footer') ?>
