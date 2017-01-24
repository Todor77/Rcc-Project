<?php
/*
 * ---------------------------------------------------------------------------------------------------------------------
 *  Admin class for adding products in the database 
 *
 *  @return json
 * ---------------------------------------------------------------------------------------------------------------------
*/
Class Admin
{
	public $check = true,
			$error = '',
			$success = '',
			$upload_dir = '../uploads/';

	function __construct($vars)
	{
		$this->check_fields($vars);

		if(!empty($_FILES['image']['name']))
		{
			$image = $this->upload_image($vars);
		}

		if($this->check)
		{
			require('../conf/config.inc.php');

			$insert = mysql_query('INSERT INTO ic_offer(`title`, `text`, `image`, `price`, `category` , `user`, `created`, `active`) VALUES ("'.$_POST['title'].'", "'.htmlspecialchars($_POST['text']).'", "'.$image.'", "'.$_POST['price'].'","'.$_POST['category'].'", "'.$_SESSION['userid'].'", "'.time().'", "1")');

			if($insert)
			{
				$this->success[] = 'Производот е успешно додаден';
				$this->output($this->success);
			}
			else 
			{
				$this->error[] = 'Се случи грешка, производот не е додаден';
				$this->output($this->error);
			}
		}
		else 
		{
			$this->output($this->error);
		}
	}	
/*
 * ---------------------------------------------------------------------------------------------------------------------
 *  Check if all fields is not empty
 * ---------------------------------------------------------------------------------------------------------------------
*/
	function check_fields($vars)
	{
		foreach ($vars as $key => $value) {
			if(empty($value))
			{
				$this->error[] = "Пополнете ги сите полиња";
				$this->check = false;
			}
		}
	}

/*
 * ---------------------------------------------------------------------------------------------------------------------
 *  Upload the image to the folder
 * ---------------------------------------------------------------------------------------------------------------------
*/
	
	function upload_image()
	{
		$upload = 1;

		$ext = explode('.', $_FILES['image']['name']);
		$ext = array_pop($ext);
		$ext = strtolower($ext);

		$image_name = date('Ymd-',time()).md5(time().rand(0,100).$_FILES['image']['name']).'.'.$ext;
		$target_file = $this->upload_dir . $image_name;

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["image"]["tmp_name"]);
		    if($check !== false) {

		    } else {
		        $this->error[] = "Документот не е слика.";
		        $upload = 0;
		    }
		}

		// Check if file already exists
		if (file_exists($target_file)) {
		    $this->error[] = "Фајлот што го одбравте го имате прикачено.";
		    $upload = 0;
		}
		
		// Allow certain file formats
		if($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "gif" ) {
		    $this->error[] = "Може да прикачувате само JPG, JPEG, PNG & GIF документи.";
		    $upload = 0;
		}
		
		// Check if $upload is set to 0 by an error
		if ($upload != 0) 
		{
		    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

		    } else {
		    	$this->check = false;
		    }
		}

		return $image_name;
	}
/*
 * ---------------------------------------------------------------------------------------------------------------------
 *  Output the message
 * ---------------------------------------------------------------------------------------------------------------------
*/
	function output($message)
	{
		return json_encode($this->error);
	}
}
?>