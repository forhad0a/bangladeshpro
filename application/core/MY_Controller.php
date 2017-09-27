<?php

use Xiaoler\Blade\FileViewFinder;
use Xiaoler\Blade\Factory;
use Xiaoler\Blade\Compilers\BladeCompiler;
use Xiaoler\Blade\Engines\CompilerEngine;
use Xiaoler\Blade\Filesystem;
use Xiaoler\Blade\Engines\EngineResolver;
 
class MY_Controller extends CI_Controller
{
	public $view;
	public $compiler;
	public $resolver;
	public $data = [];
	public $api;
	
	public function __construct()
	{
		parent::__construct();
		
		//
		$path = APPPATH . '/views';         // your view file path, it's an array
		$cachePath = APPPATH . 'cache';
		$file = new Filesystem;
		$this->compiler = new BladeCompiler($file, $cachePath);
		$this->resolver = new EngineResolver;
		$compiler = $this->compiler;
		$this->resolver->register('blade', function () use ($compiler) {
			return new CompilerEngine($compiler);
		});
		
		$this->resolver->register('php', function () use ($compiler) {
			return new CompilerEngine($compiler);
		});
		
		// get an instance of factory
		$this->view = new Factory($this->resolver, new FileViewFinder($file, [$path]));
		
		$this->api = new \Bangladeshpro\Api();
		
	}
	
	public function show($view = null)
	{
	    if(!$view){
	        $view = $this->router->directory . $this->router->class . '.' . $this->router->method;
	    }
	    
	    $this->output->set_output($this->view->make($view, $this->data, $this->load->get_vars()));
	}
	
}