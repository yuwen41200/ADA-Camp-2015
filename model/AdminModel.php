<?php

class AdminModel extends Model {

	public function showSecret($table) {
		$table_name = $this -> table($table);
		$result = $this -> db -> select('*', $table_name);
		$output = "<table style='white-space: nowrap;'><tr><td colspan='14'>Dump from table '$table_name'</td></tr>\n";
		$output .= "<tr><td>id</td>";
		$output .= "<td>name</td>";
		$output .= "<td>club</td>";
		$output .= "<td>year</td>";
		$output .= "<td>birth</td>";
		$output .= "<td>phone</td>";
		$output .= "<td>idnum</td>";
		$output .= "<td>email</td>";
		$output .= "<td>food</td>";
		$output .= "<td>apply</td>";
		$output .= "<td>note</td>";
		$output .= "<td>paid</td>";
		$output .= "<td>idkey</td>";
		$output .= "<td>time</td></tr>\n";
		while ($row = $result -> fetch_assoc()) {
			$output .= "<tr><td>$row[id]</td>";
			$output .= "<td>$row[name]</td>";
			$output .= "<td>$row[club]</td>";
			$output .= "<td>$row[year]</td>";
			$output .= "<td>$row[birth]</td>";
			$output .= "<td>$row[phone]</td>";
			$output .= "<td>$row[idnum]</td>";
			$output .= "<td>$row[email]</td>";
			$output .= "<td>$row[food]</td>";
			$output .= "<td>$row[apply]</td>";
			$output .= "<td>$row[note]</td>";
			$output .= "<td>$row[paid]</td>";
			$output .= "<td>$row[idkey]</td>";
			$output .= "<td>$row[time]</td></tr>\n";
		}
		$output .= "<tr><td colspan='14'>Total rows: $result->num_rows</td></tr></table>\n";
		$result -> free();
		return $output;
	}

	public function showSecret2($table1, $table2) {
		$table_name1 = $this -> table($table1);
		$table_name2 = $this -> table($table2);
		$result = $this -> db -> query(<<<QUERY
SELECT $table_name1.*, $table_name2.name
FROM $table_name1
LEFT OUTER JOIN $table_name2
ON $table_name1.sid = $table_name2.id;
QUERY
);
		$output = "<table style='white-space: nowrap;'><tr><td colspan='9'>Dump from table '$table_name1' (references table '$table_name2')</td></tr>\n";
		$output .= "<tr><td>id</td>";
		$output .= "<td>sid</td>";
		$output .= "<td>name</td>";
		$output .= "<td>1B</td>";
		$output .= "<td>2AB</td>";
		$output .= "<td>2CD</td>";
		$output .= "<td>3AB</td>";
		$output .= "<td>4AB</td>";
		$output .= "<td>4CD</td></tr>\n";
		while ($row = $result -> fetch_assoc()) {
			$output .= "<tr><td>$row[id]</td>";
			$output .= "<td>$row[sid]</td>";
			$output .= "<td>$row[name]</td>";
			$output .= "<td>{$row['1B']}</td>";
			$output .= "<td>{$row['2AB']}</td>";
			$output .= "<td>{$row['2CD']}</td>";
			$output .= "<td>{$row['3AB']}</td>";
			$output .= "<td>{$row['4AB']}</td>";
			$output .= "<td>{$row['4CD']}</td></tr>\n";
		}
		$output .= "<tr><td colspan='9'>Total rows: $result->num_rows</td></tr></table>\n";
		$result -> free();
		return $output;
	}

}

?>
