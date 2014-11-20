<?php snippet('header') ?>

  <main class="main snippet" role="main">
		
		<?php $snippet = $page; ?>


		<h2><?php echo $snippet->title()->html() ?></h2>
		<p><?php echo $snippet->text()->kirbytext() ?></p>
		<style type="text/css">
				<?php echo $snippet->css() ?>
		</style>

		<?php echo $snippet->html() ?>

		<div class="codepreview">
			<span><?php echo $snippet->css() ?></span>
			<span><?php echo htmlspecialchars($snippet->html()); ?></span>
		</div>
		

  </main>

<?php snippet('footer') ?>