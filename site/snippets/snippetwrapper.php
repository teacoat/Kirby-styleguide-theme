<div class="snippetwrapper">
	<h2 class="guide"><?php echo $p->title()->html() ?></h2>
	<p class="guide snippetdesc"><?php echo $p->text() ?></p>

	<style type="text/css">
			<?php echo $p->css() ?>
	</style>

	<?php echo $p->html() ?>

	<div class="codepreview">
		CSS:
		<span><?php echo '<pre>'.$p->css().'</pre>' ?></span>
		HTML:
		<span><?php echo '<pre>'.htmlspecialchars(($p->html())).'</pre>'; ?></span>
	</div>
</div>

