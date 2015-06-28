<?php

class AdminController extends Controller {

	public function index($params) {
		# DANGER: DO NOT ACCIDENTALLY COMMIT THE SECRET KEY INTO GITHUB
		if ($params['secret'] == '') {
			$mod = $this -> model('Admin');
			echo $mod -> showSecret('ada2015');
		}
	}

}

?>
