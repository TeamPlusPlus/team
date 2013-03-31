<?php if(!r::is_ajax()) snippet('header') ?>
<?php snippet('menu') ?>

<?php foreach($page->children()->visible() as $p): ?>

<?php echo snippet('member', array('p' => $p, 'link' => $p->link())); ?>
<?php endforeach; ?>

			</section>

<?php if(!r::is_ajax()) snippet('footer') ?>