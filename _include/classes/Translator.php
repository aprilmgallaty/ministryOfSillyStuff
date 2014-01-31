<?php 

class Translator
{
	var $data;
	var $result;
	
	var $translations = array(
		"I will not buy this record, it is scratched.",
		"My hovercraft is full of eels.",
		"Do you want to come back to my place, bouncy bouncy?",
		"If I said you had a beautiful body, would you hold it against me? I am no longer infected.",
		"You have beautiful thighs.",
		"Drop your panties, Sir William, I cannot wait 'til lunchtime.",
		"My nipples explode with delight!",
		"Please fondle my bum."
	);
	
	function __construct()
	{
		$this->data = array();
		$this->data['language'] = "0";
		$this->data['message'] = "";
		$this->result = "";
	}
	
	public function process(&$errors)
	{
		//first clean the data
		foreach($_POST as $key => $value) {
			$this->data[$key] = cln($value); 
		}
						
		if(empty($_POST['language']) || ($_POST['language'] == '0')) {
			$errors['language'] = 'You must choose a language.';
		}

		if(empty($_POST['message'])) {
			$errors['message'] = 'Please enter your message to translate.';
		}

		if(empty($errors)) {
			$this->result = $this->translations[rand(0, count($this->translations)-1)];
			return true;
		}
		return false;
	}
	
	public function getLanguage()
	{
		return $this->data['language'];
	}
	
	public function getMessage()
	{
		return $this->data['message'];
	}
	
	public function getResult()
	{
		return $this->result;
	}
}

?>