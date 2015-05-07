<?php

class MainController extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['application_status_code'] = '0';
		$data['application_status_message'] = '\'No error occurred.\'';
		$data['view_directory'] = '/ada2015/view/';
		$this -> template('main', $data);
	}

	public function submitFormAction() {
		$mod = $this -> model('Main');
		$mod -> insertRow('ada2015', $_POST);
		$mod -> sendMail($_POST);
		$data['application_status_code'] = '1';
		$data['application_status_message'] = '\'Successfully enrolled.\'';
		$data['view_directory'] = '/ada2015/view/';
		$this -> template('main', $data);
	}

}

?>
