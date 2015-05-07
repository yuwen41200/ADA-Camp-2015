<?php

class MainModel extends Model {

	function sendMail($params) {
	}

	function insertRow($table, $params) {
		$table_name = $this -> table($table);
		$column = 'name, club, year, birth, phone, idnum, email, idkey';
		$params = $this -> db -> checkValues($params);
		$value = implode(', ', $params);
		$this -> db -> insert($table_name, $column, $value);
	}

}

?>
