<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  	<meta charset="utf-8" />
  	<meta name="description" content="<?php echo html($site->description()) ?>" />
  	<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
    <meta name="viewport" content="initial-scale=1">
  	<meta name="robots" content="index, follow" />

  	<?php echo css('assets/styles/normalize.min.css') ?>
  	<?php echo css('assets/styles/styles.min.css') ?>
  	<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
   	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
     <!-- <script type="text/javascript" src="//use.typekit.net/oqt4bjw.js"></script>
      <script type="text/javascript">try{Typekit.load();}catch(e){}</script> -->
</head>
<body class="container">
	<header>   
		  <h3><a href="<?php echo url() ?>">Ben Stanley</a></h3>
    <nav>
      <ul>
        <?php foreach($pages->visible() AS $p): ?>
        <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></li>
        <?php endforeach ?>
      </ul>
      <div class="info"><p>Information about me and what this site is for.</p>
        <p>Thoughts and mumblings from my brain.</p>
        <p>A breakdown of web work and projects I've been a part of.</p></div>
    </nav>
	</header>