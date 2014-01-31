<?php
	include "../_include/globals.php";
	$title = "Silly Translations";
	include INCLUDE_DIR . "_header.php";
?>

<section id="pageMiddle">
	
	<div class="clear"></div>
	
	<aside id="leftCol">
	
	<h2>Ministry of Silly Translations</h2>
	
	<p>Here at the Ministry of Silly Translations, we understand that while traveling, you may happen upon someone who doesn't speak your language and you are still a little rusty with English.</p>
			<h3>We are here to help!</h3>
			<p>Just pick your language in the form and type in your query or statement and your translation will come to you in English.</p>
			<p>Make sure that your original text you put in the text block is one of the languages in the drop down and not English.</p>
	</aside><!--end #leftCol -->

		
	
	<aside id="rightCol">
	
		<h3>Fill out the form below to get your much needed translation!</h3>

<?php

	//handle form submission
	$trans = new Translator();
	$posted = false;
	$translation = "";
	if(!empty($_POST))
	{
		$errors = array();
		$posted = $trans->process($errors);
		if ($posted) {
			$translation = $trans->getResult();
			$trans = new Translator();
		}
	}

	$form = new Form();
	$form->file = true;
	$form->method = 'post';
	$form->classes = 'myform';
	$form->id = 'transForm';
	
	$fields = array(); 

	if (!$posted){
		$fields['language'] = array(
			'type' => 'select',
			'label' => 'Your language',
			'options' => array(
				'0' => 'Choose One',
				'1' => 'German',
				'2' => 'Hungarian',
				'3' => 'French',
				'4' => 'Russian',
				'5' => 'Spanish',
				'6' => 'Portuguese'
			),
			'selected' => $trans->getLanguage(),
			'req' => "1"
		);
		
		$fields['message'] = array(
			'type' => 'textarea',
			'label' => 'Your message',
			'value' => $trans->getMessage(),
			'req' => "1"
		);

		$fields['submit'] = array(
			'type' => 'submit',
			'value' => 'Submit'
		);
	} else {
		$fields['translation'] = array(
			'type' => 'textarea',
			'label' => 'Translation',
			'value' => $translation,
			'disabled' => "disabled"
		);

		$fields['submit'] = array(
			'type' => 'submit',
			'value' => 'Get another translation'
		);
	}

	print $form->build($fields);

?>
	
	</aside><!--end #rightCol -->

</section><!-- end #pageMiddle -->

<?php include INCLUDE_DIR . "_footer.php"; ?>


