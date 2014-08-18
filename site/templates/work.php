<?php snippet('header') ?>

<main>            
    <section>

  		<header class="blog_title">
		  	<h3><?php echo html($page->title()) ?></h3>
	  	</header>
	  
	  	<?php foreach($page->children()->visible() as $article): ?>
	  
  		<article>
  			<div class="page_title">
		  		<h3></h3>
	  		</div>
	  		<div class="page_content">
	  			<?php if($article->hasImages()): ?>
					<?php foreach($article->images() as $image): ?>
						<img src="<?php echo $image->url() ?>" width="<?php echo $image->width() ?>" height="<?php echo $image->height() ?>" alt="<?php echo $image->name() ?>" />
					<?php endforeach ?>
	  			<?php endif ?>
			    <h3><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h3>
			    <p><?php echo excerpt($article->text(), 300) ?></p>
			    Link: <a href="<?php echo html($article->full_link()) ?>"><?php echo html($article->link()) ?></a>
		    </div>
	  	</article>

	  <?php endforeach ?>

	</section>
</main>

<?php snippet('footer') ?>