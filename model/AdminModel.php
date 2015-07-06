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

}

?>
