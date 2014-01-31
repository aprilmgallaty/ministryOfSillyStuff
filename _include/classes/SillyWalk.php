<?php 

class SillyWalk
{
	var $data;
	var $pics;
	var $numPics;
	
	function __construct()
	{
		$this->data = array();
		$this->data['username'] = "";
		$this->data['walkname'] = "";
		$this->data['description'] = "";

		$this->numPics = 1;
		$this->pics['walkpic0'] = array(
			'name' => ''
			);
	}
	
	public function process(&$errors)
	{
		//first clean the data
		foreach($_POST as $key => $value) {
			$this->data[$key] = cln($value); 
		}
						
		foreach($_FILES as $key => $value) {
			$this->pics[$key] = $value;
		}
		$this->numPics = sizeof($this->pics);

		if(!empty($_POST['morepics'])) {
			$this->pics['walkpic' . $this->numPics] = array(
				'name' => ''
				);
			$this->numPics++;
			return false;
		}
		
		if(!empty($_POST['resetpics'])) {
			$this->pics['walkpic0'] = array(
				'name' => ''
				);
			$this->numPics = 1;
			return false;
		}
		
		if(empty($_POST['username'])) {
			$errors['username'] = 'Please enter your name.';
		}

		if(empty($_POST['walkname'])) {
			$errors['walkname'] = 'Please enter the name of your walk.';
		}

		for ($i=0; $i<$this->numPics; $i++) {
			$img = $this->pics['walkpic' . $i];
			if(empty($img['name'])){
				$errors['walkpic' . $i] = 'Please choose a picture.';
			}
		}
		
		if(empty($errors)) {
		
			//add silly walk to the db
			//look for this function in "sqlfunctions.php"
			$result = insertData('walks',$this->data);  
			if(!$result) {
				return false;
			}

			$pics = array();
			$pics['walk_id'] = $result;
			
			//upload pictures and add each to db
			for ($i=0; $i<$this->numPics; $i++) {
				$img = $this->pics['walkpic' . $i];
				if(!empty($img['name'])) {
					$imgObj = new Image();
					$imgObj->postImage($img, $img['name'], IMG_UPLOAD_DIR, 150, 150);
					$pics['name'] = $img['name'];
					insertData('pics',$pics);
				}
			}
			
			return true;
		}
		return false;
	}
	
	public function getList()
	{
		$result =  SQLQuery('SELECT * FROM walks');
		if(!empty($result['data'])){
			return $result['data'];
		}else
			return false;
	}

	public function getPics($walkId)
	{
		$result =  SQLQuery('SELECT name FROM pics WHERE walk_id = ' . $walkId);
		if(!empty($result['data'])){
			return $result['data'];
		}else
			return false;
	}
	
	public function getUserName()
	{
		return $this->data['username'];
	}
	
	public function getWalkName()
	{
		return $this->data['walkname'];
	}
	
	public function getNumPics()
	{
		return $this->numPics;
	}
	
	public function getDescription()
	{
		return $this->data['description'];
	}
	
	public function printGallery($walk)
	{
		?>
		<div class="sillyWalkEntry">
			<div class="sillyWalkInfo">
				<p class="sillyWalkUser"><span class="infoTitle">User name:</span> <?php echo $walk['username'] ?></p>
				<p class="sillyWalkName"><span class="infoTitle">Walk name:</span> <?php echo $walk['walkname'] ?></p>
				<div class="clear"></div>
				<p class="sillyWalkDesc"><span class="infoTitle">Description:</span> <?php echo $walk['description'] ?></p>
			</div> <!-- end sillyWalkInfo -->
			<div class="sillyWalkPictures">
				<?php
					$pics = $this->getPics($walk['walk_id']);
					if ($pics) {
						foreach($pics as $picName) {
							?>
							<img class="sillyWalkPic" src="<?php echo IMG_UPLOAD_URL . $picName['name']; ?>" width="150" height="150" alt="<?php echo $picName['name']; ?>" />
							<?php
						}
					}
				?>
			</div> <!-- end sillyWalkPictures -->
		</div> <!-- end sillyWalk -->
		<?php
	}
}

?>