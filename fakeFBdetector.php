<?php
 /*
 Created by James Jara and Luis Montero
 Computer Society Costa Rica
 */
 
 class FakeFBDetector{
 
 	private static $instance;
	private $id_user = null;
	
	private function __construc(){}   	
	
	public static function singleton(){
		if(!isset(self::$instance)){
            $nombreClase = __CLASS__;
			self::$instance = new  $nombreClase;
		}
		return self::$instance;		
	}
    public function __clone(){}
    public function __wakeup(){}
	
	private function getRequest($url , $tiny = false){	
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url );
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		if(!$tiny){
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_NOBODY, true);
			curl_exec($ch);
			$url = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
		} else {
			$url = curl_exec($ch);
		}
		curl_close($ch);
		return $url;
	}
	
	private function setUser($value){
		if(!isset($value)or(empty($value))) throw new Exception(' Id User is requerid ');
		$this->id_user = $value;
	}
	
	private function getUser(){
		return $this->id_user;
	}
	
	private function getFBPhoto(){
		$user = $this->getUser();
		return $this->getRequest( sprintf("http://graph.facebook.com/%s/picture?type=large",$user) );
	}
	
	private function getTineye($photo){
		return $this->getRequest( sprintf("http://www.tineye.com/search?url=%s",$photo) , true );	
	}
	
	public function isFakeFacebook($value){
		$this->setUser($value);
		$photo 	= $this->getFBPhoto();
		$html 	= $this->getTineye($photo);
		//var_dump($html); 
		//if result is like 0 show "Real profile", else if result is more big than 0 show "Fake profile"
		if (strpos($html, "0 results") !== false) { 	
			return false;
		} else
			return true;
	}
 

 }

?>