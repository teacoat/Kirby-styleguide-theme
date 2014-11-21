<div class="colorgroupwrapper">
			<span><?php echo $colorgroup->title(); ?></span>

	        <?php foreach($colorgroup->children() as $color): ?>
		        <?php include('color.php') ?>
	        <?php endforeach ?>
</div>

