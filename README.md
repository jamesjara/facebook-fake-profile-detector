facebook-fake-profile-detector
==============================
Labels
facebook, detector, jamesjara, luismbcr

A software in php to detect fakes profiles in facebook. 

- Status May 14
V1 finished, tested with many diferrent users 0% error margin.

```php
	$detect = new FakeFBDetector();
	$result = null;
	//Check if the ID exists
	$profile_id = $_POST['id'];
	if(isset( $profile_id )){		
		if( $detect->isFakeFacebook( $profile_id  ) ){ 
			$result = "fAKE";
		} else {
			$result = "4 REAL";
		}
	} 

```
