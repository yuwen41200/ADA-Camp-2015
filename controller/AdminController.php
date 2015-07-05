<?php

class AdminController extends Controller {

	public function index() { }

	public function show($params = NULL) {
		if ($params['secret'] == '') {
		# DANGER: DO NOT ACCIDENTALLY COMMIT THE SECRET KEY ONTO GITHUB!
			$mod = $this -> model('admin');
			echo $mod -> showSecret('student');
		}
	}

}

?>
