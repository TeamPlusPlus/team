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
					<?php echo $linkTag; ?><img src="<?php echo $image->url(); ?>" height=200 width=200><?php echo $linkCloseTag; ?>
<?php endif; ?>
					<?php echo kirbytext($p->text()); ?>
					<ul class="infos">
						<li><a data-icon="w" href="<?php echo $p->web(); ?>"><?php echo $p->web(); ?></a></li>
						<li><a data-icon="t" href="https://twitter.com/<?php echo $p->twitter(); ?>">@<?php echo $p->twitter(); ?></a></li>
						<li><a data-icon="m" href="mailto:<?php echo $p->mail(); ?>"><?php echo $p->mail(); ?></a></li>
					</ul>
				</section>