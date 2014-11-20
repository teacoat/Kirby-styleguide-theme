<?php snippet('header') ?>

  <main class="main category" role="main">
	<div class="categoryinfo">
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>
	</div>

	        <?php foreach($page->children()->visible() as $p): ?>
		        <?php include('site/snippets/snippetwrapper.php') ?>
	        <?php endforeach ?>

  </main>

<?php snippet('footer') ?>