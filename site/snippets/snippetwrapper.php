<div class="snippetwrapper">
	<h2><?php echo $p->title()->html() ?></h2>
	<p><?php echo $p->text()->kirbytext() ?></p>
	<style type="text/css">
			<?php echo $p->css() ?>
	</style>

	<?php echo $p->html() ?>

	<div class="codepreview">
		CSS:
		<span><?php echo nl2br($p->css()) ?></span>
		HTML:
		<span><?php echo nl2br(htmlspecialchars(($p->html()))); ?></span>
	</div>
</div>