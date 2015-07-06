<?php

class EnrollModel extends Model {

	private $sid = 0;

	public function evaluateKey($table, $param) {
		$table_name = $this -> table($table);
		$key = $this -> db -> checkValues(array($param));
		$result = $this -> db -> select('id', $table_name, "idkey = $key[0]");
		if ($row = $result -> fetch_assoc())
			$this -> sid = $row['id'];
		$result -> free();
		return $this -> sid;
	}

	public function insertRow($table, $params) {
		$table_name = $this -> table($table);
		$column = '2AB, 2CD, 3AB, 4CD, sid';
		unset($params['key']);
		$params['sid'] = $this -> sid;
		$value = $this -> db -> checkValues($params);
		$value = implode(', ', $value);
		$this -> db -> insert($table_name, $column, $value);
	}

}

?>
