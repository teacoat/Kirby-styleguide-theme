<?php snippet('header') ?>

  <main class="main category" role="main">
	CATEGORY
    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>