<?php

class MainModel extends Model {

	private $hash_value = NULL;

	function insertRow($table, $params) {
		$table_name = $this -> table($table);
		$column = 'name, club, year, birth, phone, idnum, email, idkey';
		$this -> hash_value = password_hash($params['name'], PASSWORD_DEFAULT);
		$params['idkey'] = $this -> hash_value;
		$value = $this -> db -> checkValues($params);
		$value = implode(', ', $value);
		$this -> db -> insert($table_name, $column, $value);
	}

	function sendMail($params) {
		if (!preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i', $params['email']))
			die('電子郵件信箱無效');
		$to = htmlentities($params['email'], ENT_QUOTES, 'UTF-8');
		$subject = '=?UTF-8?B?'.base64_encode('ADA 2015 報名通知信').'?=';
		$body = '<p>好耶！感謝你的報名，我們都很期待見到你喔∼</p>';
		$body .= "<table style='border-collapse: collapse; width: 500px;'>";
		$body .= "<tr><td style='width: 150px'>姓名</td><td>".htmlentities($params['name'], ENT_QUOTES, 'UTF-8').'</td></tr>';
		$body .= '<tr><td>社團</td><td>'.htmlentities($params['club'], ENT_QUOTES, 'UTF-8').'</td></tr>';
		$body .= '<tr><td>級別</td><td>'.htmlentities($params['year'], ENT_QUOTES, 'UTF-8').'</td></tr>';
		$body .= '<tr><td>生日</td><td>'.htmlentities($params['birth'], ENT_QUOTES, 'UTF-8').'</td></tr>';
		$body .= '<tr><td>行動電話</td><td>'.htmlentities($params['phone'], ENT_QUOTES, 'UTF-8').'</td></tr>';
		$body .= '<tr><td>身份證字號</td><td>'.htmlentities($params['idnum'], ENT_QUOTES, 'UTF-8').'</td></tr>';
		$body .= '<tr><td>電子郵件信箱</td><td>'.htmlentities($params['email'], ENT_QUOTES, 'UTF-8').'</td></tr>';
		$body .= '</table>';
		$body .= "<p>你的選課金鑰是 <span style='color: red'>{$this -> hash_value}</span>，請使用此金鑰進行線上選課。<br>";
		$body .= "線上選課網址：<a href='http://ckeisc.nctucs.net/ada2015/index.php/ctl/Enroll' target='_blank'>http://ckeisc.nctucs.net/ada2015/index.php/ctl/Enroll</a></p>";
		$body .= '<p>本郵件由系統自動寄出，請勿回覆。</p>';
		$header = "MIME-Version: 1.0\r\n"."Content-type: text/html; charset=UTF-8\r\n";
		mail($to, $subject, $body, $header);
	}

}

?>
