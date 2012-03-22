<?php
/*
ToDo:

1. GET PHOTO FROM FACEBOOK
2. UPLOAD PHOTO TO GOOGLE IMAGES.
		2.A IF THERE IS MORE THAN 3 RESULTS FROM DIFERENTS DOMAINS FLAG AS A FAKE PROFILE
		2.B ELSE FLAG AS NO FAKE PROFILE
*/

//Check if the ID exists
if(isset($_GET['id'])){
	$profile_id = $_GET['id']
} else {
	throw new Exception('ID MUST BE ESPECIFIED');
} 

//GET IMAGE FROM FB GRAPH | https://graph.facebook.com/jamesjaraweb/picture
$original_photo = "https://graph.facebook.com/$profile_id/picture";

echo $original_photo;
//UPLOAD IMAGE TO GOOGLE IMAGES | https://developers.google.com/image-search/v1/devguide

//COUNT RESULTS

?>