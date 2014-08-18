<?php snippet('header') ?>

<main>   
	<section>         
	    <article>
	        <header class="page_title">
	            <h3><?php echo html($page->title()) ?></h3>
	        </header>
	        <div class="page_content">
	            <?php echo kirbytext($page->text()) ?>                
	        </div>
	     </article>
 	</section>
</main>

<?php snippet('footer') ?>