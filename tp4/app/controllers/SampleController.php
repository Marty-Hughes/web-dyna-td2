<?php
namespace controllers;
 /**
 * Controller SampleController
 **/
class SampleController extends ControllerBase{
    
	/**
	*
	* @get("_default","name"=>"Home")
	*/
	public function index(){
		$this->loadView("SampleController/index.html");
	}

/**
	 *@route("Samplecontroller")
	**/
	public function bouton(){
		
		$this->loadView('SampleController/bouton.html');

	}


	/**
	 *@route("do/incription")
	**/
	public function post(){
		
	}

}