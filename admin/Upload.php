<?php

// if(isset($_FILES['file']['name'])){

// 	/* Getting file name */
// 	$filename = $_FILES['file']['name'];

//     $final_image = rand(1000,1000000)."_".$filename;

// 	/* Location */
// 	$location = "../uploads/".$final_image;
// 	$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
// 	$imageFileType = strtolower($imageFileType);

// 	/* Valid extensions */
// 	$valid_extensions = array("jpg","jpeg","png","pdf");

// 	$response = 0;
// 	/* Check file extension */
// 	if(in_array(strtolower($imageFileType), $valid_extensions)) {
// 	   	/* Upload file */
// 	   	if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
// 	     	$response = $final_image;
// 	   	}
// 	}

// 	echo $response;
// 	exit;
// }



if(isset($_FILES['file']['name'])) {
	$file = $_FILES['file']['tmp_name']; 
	$sourceProperties = getimagesize($file);
	$fileNewName = time();
	$folderPath = "../uploads/";
	$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	$imageType = $sourceProperties[2];

	switch ($imageType) {

		case IMAGETYPE_PNG:
			$imageResourceId = imagecreatefrompng($file); 
			$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagepng($targetLayer,$folderPath. $fileNewName. "_resize.". $ext);
			break;

		case IMAGETYPE_GIF:
			$imageResourceId = imagecreatefromgif($file); 
			$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagegif($targetLayer,$folderPath. $fileNewName. "_resize.". $ext);
			break;

		case IMAGETYPE_JPEG:
			$imageResourceId = imagecreatefromjpeg($file); 
			$targetLayer = imageResize($imageResourceId,$sourceProperties[0],$sourceProperties[1]);
			imagejpeg($targetLayer,$folderPath. $fileNewName. "_resize.". $ext);
			break;

		default:
			echo "Invalid Image type.";
			exit;
			break;
	}
	//  if(move_uploaded_file($file, $folderPath. $fileNewName. "_resize.". $ext)){
	 	$response = $fileNewName. "_resize.". $ext;
	//  }
	echo $response;
	exit;
}

function imageResize($imageResourceId,$width,$height) {
	$targetWidth = $width < 1280 ? $width : 1280 ;
	$targetHeight = ($height/$width)* $targetWidth;
	$targetLayer = imagecreatetruecolor($targetWidth,$targetHeight);
	imagecopyresampled($targetLayer, $imageResourceId, 0, 0, 0, 0, $targetWidth, $targetHeight, $width, $height);
	return $targetLayer;
}

