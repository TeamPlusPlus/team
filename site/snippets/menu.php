<?php if(!r::is_ajax()): ?>
				<div class="nav">
					<nav>
						<a href="/" class="logo"><img src="/assets/images/logo_mono.png" alt="<?php echo $site->title(); ?>"></a>
						<ul>
<?php foreach($pages->visible() as $p): ?>
							<li<?php if($p->icon()) echo ' data-icon="' . $p->icon() . '"'; ?>><a<?php if($p->isActive()) echo ' class="active"'; else if($p->isOpen()) echo ' class="open"'; ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
<?php endforeach; ?>
						</ul>
					</nav>
				</div>
			</header>
			<section class="main">
<?php else: 
	echo $site->title() . " » " . $page->title() . "\n";
	foreach($pages->visible() as $p) {
		if($p->isActive()) {
			echo $p->url() . " || active";
			break;
		} else if($p->isOpen()) {
			echo $p->url() . " || open";
			break;
		}
	}
	
	echo "\nSEPARATOR----SEPARATOR\n";
endif; ?>
