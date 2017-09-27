<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends MY_Controller {

	public function index()
	{
		$this->data['name'] = "bangladesh Pro";
		$this->show('welcome_message');
		
		//$this->load->view('welcome_message');
	}
	
	//{"arenas":"api/arenas","cards":"api/cards","chests":"api/chests","players":"api/players","leagues":"api/leagues"}
	
	// arenas
	public function getArenas()
	{
		$this->data['arenas'] = $this->api->sendRequest('arenas');
		$this->show();
	}
	
	
	// cards
	public function getCards()
	{
		$this->data['cards'] = $this->api->sendRequest('cards');
		$this->show();
	}
	
	// chests
	public function getChests()
	{
		$this->data['chests'] = $this->api->sendRequest('chests');
		$this->show();
	}
	
	
	// cards
	public function getPlayers()
	{
		$this->data['players'] = $this->api->sendRequest('players');
		$this->show();
	}
	
	
	// cards
	public function getLeagues()
	{
		$this->data['leagues'] = $this->api->sendRequest('leagues');
		$this->show();
	}
}
