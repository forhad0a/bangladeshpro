<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends MY_Controller {

	public function index()
	{
		$this->data['name'] = "bangladesh Pro";
		$this->data['clan'] = $this->api->getClan();
		
		$this->show();
	}
	
	function getClan($tag = null)
	{
		$this->data['clan'] = $this->api->getClan($tag);
		
		$this->show();
	}
	
	function getTopClan()
	{
		$this->data['topClans'] = $this->api->getTopClan();
		$this->show();
	}
	
	function getMultipleClans($tag = '2CCCP,2U2GGQJ')
	{
		$this->data['clans'] = $this->api->getMultipleClans($tag);
		$this->show();
	}
	function getPlayer($tag = 'Y99YRPYG')
	{
		$$this->data['player'] = $this->api->getPlayer($tag = 'Y99YRPYG');
		$this->show();
	}
	function getConstants()
	{
		$this->data['constants'] = $this->api->getConstants();
		$this->show();
	}
}
