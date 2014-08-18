<?php snippet('header') ?>

<section class="workarticle">
	<article>
  	<header class="page_title">
		<h3></h3>
	</header>

	<div class="page_content">
		<?php if($page->hasImages()): ?>
			<?php foreach($page->images() as $image): ?>
				<img src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" alt="<?php echo $image->name() ?>" />
			<?php endforeach ?>
	  	<?php endif ?>
	    <h3><?php echo html($page->title()) ?></h3>
	    <p><?php echo excerpt($page->text(), 300) ?></p>
	    Link: <a href="<?php echo html($page->full_link()) ?>"><?php echo html($page->link()) ?></a>
	</div>
  </article>
</section>

<?php snippet('footer') ?>