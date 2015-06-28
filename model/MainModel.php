<?php

class MainModel extends Model {

	private $hash_value = NULL;
	private $enroll_str = NULL;

	public function insertRow($table, $params) {
		$table_name = $this -> table($table);
		$column = 'name, club, year, birth, phone, idnum, email, food, enroll, note, idkey';
		if (empty($params['enroll']))
			die('你什麼活動都不參加，那你填報名表幹嘛？');
		$this -> enroll_str = implode('；', $params['enroll']);
		$params['enroll'] = $this -> enroll_str;
		$this -> hash_value = password_hash($params['name'], PASSWORD_DEFAULT);
		$params['idkey'] = $this -> hash_value;
		$value = $this -> db -> checkValues($params);
		$value = implode(', ', $value);
		$this -> db -> insert($table_name, $column, $value);
	}

	public function sendMail($params) {
		if (!preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i', $params['email']))
			die('電子郵件信箱無效');
		foreach ($params as $key => $value)
			$params[$key] = htmlentities($params[$key], ENT_QUOTES, 'UTF-8');
		$this -> enroll_str = htmlentities($this -> enroll_str, ENT_QUOTES, 'UTF-8');
		$this -> hash_value = htmlentities($this -> hash_value, ENT_QUOTES, 'UTF-8');
		$to = $params['email'];
		$subject = '=?UTF-8?B?'.base64_encode('ADA 2015 報名通知信').'?=';
		$body = <<<MESSAGE
<!DOCTYPE html>\r\n
<html>\r\n
<head>\r\n
	<style type='text/css'>\r\n
		table {\r\n
			border-collapse: collapse;\r\n
			width: 500px;\r\n
		}\r\n
		td {\r\n
			border: 1px solid black;\r\n
		}\r\n
		td:first-child {\r\n
			width: 120px;\r\n
		}\r\n
	</style>\r\n
</head>\r\n
<body>\r\n
	<p>好耶！感謝你的報名，我們都很期待見到你喔∼</p>\r\n
	<p>以下是你的報名資料：</p>\r\n
	<table>\r\n
		<tr><td>姓名</td><td>$params[name]</td></tr>\r\n
		<tr><td>社團</td><td>$params[club]</td></tr>\r\n
		<tr><td>級別</td><td>$params[year]</td></tr>\r\n
		<tr><td>生日</td><td>$params[birth]</td></tr>\r\n
		<tr><td>行動電話</td><td>$params[phone]</td></tr>\r\n
		<tr><td>身份證字號</td><td>$params[idnum]</td></tr>\r\n
		<tr><td>電子郵件信箱</td><td>$params[email]</td></tr>\r\n
		<tr><td>飲食</td><td>$params[food]</td></tr>\r\n
		<tr><td>報名項目</td><td>$this->enroll_str</td></tr>\r\n
		<tr><td>備註</td><td>$params[note]</td></tr>\r\n
	</table>\r\n
	<p>你的選課金鑰為：<span style='color: red'>$this->hash_value</span><br>\r\n
	請使用此金鑰進行線上選課。</p>\r\n
	<p>線上選課網址：<a href='http://ckeisc.nctucs.net/ada2015/index.php/ctl/Enroll' target='_blank'>http://ckeisc.nctucs.net/ada2015/index.php/ctl/Enroll</a><br>\r\n
	本系統將於 7/1 開放。</p>\r\n
	<p>本郵件由系統自動寄出，請勿回覆。</p>\r\n
</body>\r\n
</html>\r\n
MESSAGE;
		$header = "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8\r\n";
		mail($to, $subject, $body, $header);
	}

}

?>
