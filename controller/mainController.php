<?php

class mainController extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		echo "Debug message: action 'index' in controller 'main'<br>\n";
		echo "Info: try other available actions 'testDatabases', 'testSample', 'testHome'<br>\n";
		echo "Info: or try other available controllers 'dbOperation', 'main' in app 'simple_cache_test'<br>\n";
	}

	public function testDatabases() {
		$mod = $this -> model('main');
		$mod -> testing();
		$mod -> show();
	}

	public function testSample() {
		$obj = $this -> lib('sample', FALSE);
		$obj -> sampleRun();
	}

	public function testHome() {
		$data['application_status_code'] = '0';
		$data['application_status_message'] = '\'No error occurred.\'';
		$data['view_directory'] = '/ada2015/view/';
		$this -> template('main', $data);
	}
}

?>