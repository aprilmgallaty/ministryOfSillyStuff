<?php
	include "../_include/globals.php";
	$title = "Silly Walks";
	include INCLUDE_DIR . "_header.php";
?>
<section id="pageMiddle">
	
	<div class="clear"></div>
	
	<aside id="leftCol">
	
		<article id="swLogo"><img src="<?php echo IMG_URL . "moswLogo.png"; ?>" width="161" height="172" alt="Silly Walks logo" /></article>
		
			<h2>Ministry of Silly Walks</h2>
	
				<h3>Our Goals</h3>
					<p>Our goal at the Ministry of Silly Walks is to promote the growth and culture of eccentric locomotion.</p>
					<p>Our efforts consists of several principles, the first being the sponsorship of those who have already cultivated a peculiar ambulatory stride. For those lucky few who have been successful thus far on your own, we can refine your existing talents and help you to incorporate them in your daily life.
					<p>The second of our principles is the education of the public as to the historical and social importance of puerile gaits from ancient times to modern society. We aim to bring down the barriers of preconceived notions and dismissive attitudes that prevent our clients from achieving the goals that they desire.</p>
					<p>Our final principle is the development of new talents and concepts in quixotic strolling. If you have interests in this field but have not yet developed your own personal talents, or you simply wish to learn more, we are here to provide the foundation for your learning.</p>
	
				<h3>Accessibility</h3>
					<p>For those individuals who are unable to take advantage of bipedal ambulation, we offer the following alternative methods of unorthodox traversal.</p>
						<h4>For the visually impaired</h4>
							<ul>
								<li>Canine Quadruped Ludicrous Trotting</li>
								<li>Blanco Cano Ridiculo Ambulo</li>
							</ul>
							
				<h4>For the chair bound</h4>
					<ul>
						<li>Absurd Rolling Gyration Chair Movements</li>
					
					</ul>
					
					<p>We endeavor to accommodate all who show an interest in the fine art of vacuous progress regardless of one's particular infirmary.</p>
	</aside><!--end #leftCol -->

		
	
	<aside id="rightCol">
		
		<aside id="walkSprites">
		
		<h3 id="sampleWalks">Sample Silly Walks</h3>
		
		<aside id="walkTitles">
			<h2 class="swText1">March Squatter</h2>	
			<h2 class="swText2">Kick-n-Hike</h2>
		</aside>
		
		<aside id="sample1">
			<div id="sprite1"></div>
		</aside>
		
		<aside id="sample2">
			<div id="sprite2"></div>
		</aside>
		
	</aside><!--end #walkSprites -->
		
		<h3 id="submitWalk">Submit your Silly Walk</h3>
	
<?php

	//handle form submission
	$walk = new SillyWalk();
	if(!empty($_POST))
	{
		$errors = array();
		$posted = $walk->process($errors);
		if ($posted) {
			$message = 'Thank you for your submission. It has been added to the gallery.'; 
			$walk = new SillyWalk();
		}
	}

	$form = new Form();
	$form->file = true;
	$form->method = 'post';
	$form->classes = 'myform';
	$form->id = 'sillyWalkSubmitForm';
	$form->action = 'sillyWalks.php#submitWalk';
	
	$fields = array(); 

	if(!empty($message)) { 
		echo '<div class="result">'.$message.'</div>'; 
	}

	$fields['username'] = array(
		'type' => 'text',
		'label' => 'Your name',
		'value' => $walk->getUserName()
	);
	
	$fields['walkname'] = array(
		'type' => 'text',
		'label' => 'Name of your walk',
		'value' => $walk->getWalkName()
	);
	
	$fields['morepics'] = array(
		'type' => 'submit',
		'label' => 'More than on picture?  Click here to add more.',
		'value' => 'Add picture'
	);
	
	$fields['resetpics'] = array(
		'type' => 'submit',
		'label' => 'Reset back to a single picture',
		'value' => 'Reset pictures'
	);
	
	for ($i=0; $i<$walk->getNumPics(); $i++) {
		$fields['walkpic' . $i] = array(
			'type' => 'file',
			'class' => 'upload',
			'label' => 'Picture #' . ($i+1)
		);
	}
	
	$fields['description'] = array(
		'type' => 'textarea',
		'label' => 'Description of walk',
		'value' => $walk->getDescription()
	);

	$fields['submit'] = array(
		'type' => 'submit',
		'value' => 'Submit'
	);

	print $form->build($fields);

?>
		
	<div class="clear"></div>
	
	<div id="viewGalImg"><a href="<?php echo FILES_URL . "walksGallery.php"; ?>"><img src="<?php echo IMG_URL . "view.png"; ?>" width="35" height="35" alt="View Gallery" /></a></div>
	<div id="viewGal"><a href="<?php echo FILES_URL . "walksGallery.php"; ?>">View our gallery of Silly Walks</a></p></div>

	</aside><!--end #rightCol -->
	
	

</section><!-- end #pageMiddle -->


<?php include INCLUDE_DIR . "_footer.php"; ?>


