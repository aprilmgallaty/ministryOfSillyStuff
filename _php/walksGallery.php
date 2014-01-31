<?php
	include "../_include/globals.php";
	$title = "Silly Walks Gallery";
	include INCLUDE_DIR . "_header.php";
?>

<section id="sillyWalksGallery">
	
	<h2>Silly Walks Gallery</h2>
	
<?php

	$sillyWalk = new SillyWalk();
	$walks = $sillyWalk->getList();

	if ($walks) {
		foreach($walks as $walk) {
			$sillyWalk->printGallery($walk);
		}
	}
	else {
		?>
		<p>The gallery is empty!</p>
		<?php
	}
	
?>

</section><!-- end #sillyWalksGallery -->

<?php include INCLUDE_DIR . "_footer.php"; ?>


