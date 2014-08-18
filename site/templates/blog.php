<?php snippet('header') ?>
<main>            
    <section>  		
  		<header class="blog_title">
		  	<h3><?php echo html($page->title()) ?></h3>
	  	</header>
	  
	  	<?php foreach($page->children()->visible()->flip() as $article): ?>
	  
		  	<article>
		  		<div class="page_title blog_entry">
		  			<time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate"><?php echo $article->date('dS F Y') ?></time>
		  		</div>
		  		<div class="page_content">
				    <h3><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h3>
				    <p>Reading Time: <?php echo readingtime($article->text()) ?></p>
				    <p><?php echo excerpt($article->text(), 300) ?></p>
				    <a href="<?php echo $article->url() ?>">Read more…</a>
			    </div>
		  	</article>

	  	<?php endforeach ?>

	</section>
</main>

<?php snippet('footer') ?>