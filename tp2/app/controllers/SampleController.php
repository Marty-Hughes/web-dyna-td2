<?php
namespace controllers;
 /**
 * Controller SampleController
 **/
class SampleController extends ControllerBase{

	public function index(){
		$this->loadView("SampleController/index.html");
	}

	/**
	 *@route("send/(message)/{who}","methods"=>["get"])
	**/
	public function sendMessange($message,$who='world'){
		
		$this->loadView('SampleController/sendMessange.html',compact('message','who'));

	}


	/**
	 *@route("contact","methods"=>["get"])
	**/
	public function contactForm(){
		
		$this->loadView('SampleController/contactForm.html');

	}

}
