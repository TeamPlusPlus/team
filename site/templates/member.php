<?php if(!r::is_ajax()) snippet('header') ?>
<?php snippet('menu') ?>

<?php echo snippet('member', array('p' => $page, 'link' => $page->link())); ?>

<?php if(!r::is_ajax()) snippet('footer') ?>