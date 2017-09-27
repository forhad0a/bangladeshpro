<?php
namespace Bangladeshpro;
/**
 * Api end point: https://docs.cr-api.com/#/README
 */ 
class Api {
    
    public $ApiUrl = "http://api.cr-api.com/";
    
    public $clanTag = "8JYCGLPP";
	
	public function get($url)
	{
		
		$ch = curl_init(); 
		curl_setopt($ch, CURLOPT_URL, 'http://api.cr-api.com/'.$url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	
		$output = curl_exec($ch);
		curl_close($ch);
		
		return $output;
	}
	
	// GET http://api.cr-api.com/clan/<TAG>
	public function getClan($clanTag = null)
	{
		if(!$clanTag)
			$clanTag = $this->clanTag;
			
		return $this->get('clan/'.$clanTag);
	}
	
	// http://api.cr-api.com/top/clans
	public function getTopClan()
	{
		return $this->get('top/clans');
	}
	
	// GET http://api.cr-api.com/clan/<TAG>,<TAG>,<TAG>?members=0
	public function getMultipleClans($tags)
	{
		return $this->get('clan/'.$tags);
	}
	
	// GET http://api.cr-api.com/profile/<TAG>
	public function getPlayer($tag)
	{
		return $this->get('profile/'.$tag);
	}
	
	//http://api.cr-api.com/constants
	/**
	 * 
	 **/
	public function getConstants()
	{
		return $this->get('constants');
	}
	
}