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
	 *@route("do/incription""methods"=>["get"])
	**/
	public function post(){
		
	}


	/**
	 *@route("/inscriptions""methods"=>["get"])
	**/
	public function inscriptions(){
		
		$this->loadView('SampleController/inscriptions.html');

	}


	/**
	 *@route("/logout","methods"=>["get"])
	**/
	public function logout(){
		
		$this->loadView('SampleController/logout.html');

	}


	/**
	 *@route("/inscription/do/","methods"=>["post"])
	**/
	public function ValidateInscription(){
		
		$this->loadView('SampleController/ValidateInscription.html');

	}

}
