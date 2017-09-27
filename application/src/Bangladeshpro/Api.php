<?php
namespace Bangladeshpro;

class Api {
    
    public $ApiUrl = "http://www.clashapi.xyz/api/";
    
	function sendRequest($url)
	{
		
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, $this->ApiUrl.$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	
		$output = curl_exec($ch);
		curl_close($ch); 
		return $output;
	}
}