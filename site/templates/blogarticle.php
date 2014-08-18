<?php snippet('header') ?>
<main>
	<section class="blogarticle">
	  <article>
	  	<div class="page_title">
			<time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $page->date('dS F Y') ?></time>
		</div>
		<div class="page_content">
		    <h3><?php echo html($page->title()) ?></h3>
		    <p>Reading Time: <?php echo readingtime($page->text()) ?></p>
		    <p><?php echo kirbytext($page->text()) ?></p>
		    <a href="<?php echo url('blog') ?>">Back…</a>
		</div>
	  </article>
	</section>
</main>

<?php snippet('footer') ?>