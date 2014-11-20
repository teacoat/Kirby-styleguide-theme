<?php snippet('header') ?>

  <main class="main category" role="main">
	<div class="categoryinfo">
		<h1 class="guide"><?php echo $page->title()->html() ?></h1>
		<p class="guide"><?php echo $page->text()->kirbytext() ?></p>
	</div>

	        <?php foreach($page->children() as $p): ?>
		        <?php include('site/snippets/snippetwrapper.php') ?>
	        <?php endforeach ?>

  </main>

<?php snippet('footer') ?>

