<?php
	include "../_include/globals.php";
	$title = "Silly Pictures";
	include INCLUDE_DIR . "_header.php";
?>

<section id="pageMiddle">
	
	<div id="pageTitle">
		<h2>Silly Pictures About Me</h2>
	</div>
	
	<div class="clear"></div>
		
	<aside id="leftColPictures">
		<div id="thumbs">
			<ul class="thumbs noscript">
			<?php
				for ($i=1; $i<=30; $i++) {
					?>
					<li>
						<a class="thumb" href="<?php echo IMG_URL . "SPAM_Pics/" . sprintf("%02d", $i) . ".jpg"; ?>">
							<img src="<?php echo IMG_URL . "SPAM_Pics/" . sprintf("%02d", $i) . ".jpg"; ?>" width="100" height="100" alt="April Gallaty" />
						</a>
					</li>
					<?php
				}
			?>
			</ul>
		</div>
	</aside><!--end #leftCol -->
	
	<aside id="rightCol">
		<div id="controls"></div>
		<div id="slideshow"></div>
		<div id="caption"></div>
	</aside><!--end #rightCol -->

</section><!-- end #pageMiddle -->

<?php include INCLUDE_DIR . "_footer.php"; ?>


