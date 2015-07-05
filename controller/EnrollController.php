<?php

class EnrollController extends Controller {

	public function index() {
		$data['application_status_code'] = '0';
		$data['application_status_message'] = '\'No error occurred.\'';
		$data['web_root'] = $this -> config('web_root');
		$this -> template('form', $data);
	}

	public function submitFormAction() {
		$mod = $this -> model('enroll');
		if ($mod -> evaluateKey('student', $_POST['key'])) {
			$mod -> insertRow('course', $_POST);
			$data['application_status_code'] = '1';
			$data['application_status_message'] = '\'Successfully enrolled.\'';
			$data['web_root'] = $this -> config('web_root');
			$this -> template('form', $data);
		}
		else {
			$data['application_status_code'] = '-1';
			$data['application_status_message'] = '\'Invalid enrollment key!\\nPlease try again.\'';
			$data['web_root'] = $this -> config('web_root');
			$this -> template('form', $data);
		}
	}

}

?>
