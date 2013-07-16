				<section class="imgblock">
					<?php if($link) {
						$linkTag = "<a href=\"$link\">";
						$linkCloseTag = "</a>";
					} else {
						$linkTag = "";
						$linkCloseTag = "";	
					} ?>
					<h2><?php echo $linkTag; ?><?php echo $p->title(); ?><?php echo $linkCloseTag; ?></h2>
<?php $image = $p->images()->find('tile.jpg'); ?>
<?php if($image): ?>
					<?php echo $linkTag; ?><img src="<?php echo $image->url(); ?>" height=200 width=200 alt="<?php echo $p->title(); ?>"><?php echo $linkCloseTag; ?>
<?php endif; ?>
					<ul class="infos nomargintop"><li data-icon="h"><a href="<?php echo url('team') ?>"><?php echo $p->team() ?></a></li></ul>
					<?php echo kirbytext($p->text()); ?>
				</section>
