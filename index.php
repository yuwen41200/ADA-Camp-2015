<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>17&times;20th 建北電資研聯合幹部訓練營</title>
	<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script>
		/* jshint ignore:start */
		var applicationStatusCode = <?php echo $applicationStatusCode; ?>;
		var applicationStatusMessage = <?php echo $applicationStatusMessage; ?>;
		/* jshint ignore:end */
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="dist/semantic.min.js"></script>
	<script src="js/jquery.datetimepicker.js"></script>
	<script src="js/script.js"></script>
</head>
<body id="home">
	<header class="ui inverted masthead segment">
		<div class="ui page grid">
			<div class="column">
				<div class="ui inverted blue menu">
					<div class="header item">CKEFGISC 2015</div>
					<div class="right menu">
						<div class="ui mobile dropdown link item">選項
							<i class="dropdown icon"></i>
							<div class="menu">
								<a class="item" href="http://ckeisc.nctucs.net/" target="_blank">建中電研社社團網站</a>
								<a class="item" href="telnet://fgisc.org/" target="_blank">北一資研社社團 BBS 站</a>
								<a class="item" href="mailto:yuwen41200.cs03@nctu.edu.tw" target="_blank">聯絡我們</a>
							</div>
						</div>
						<a class="item" href="http://ckeisc.nctucs.net/" target="_blank">建中電研社社團網站</a>
						<a class="item" href="telnet://fgisc.org/" target="_blank">北一資研社社團 BBS 站</a>
						<a class="item" href="mailto:yuwen41200.cs03@nctu.edu.tw" target="_blank">聯絡我們</a>
					</div>
				</div>
				<img src="images/cat.png" class="ui medium image">
				<div class="ui hidden transition information">
					<h1 class="ui inverted header">17&times;20<sup>th</sup> 建北電資研聯合幹部訓練營<br>
					<span>CKEFGISC United Leader Training Camp 2015</span></h1>
					<p>幹部訓練營 (ADA) 旨在培訓新任社團幹部的專業技術與營隊籌辦能力</p>
					<div class="large basic inverted animated fade ui button">
						<div class="visible content">參加 ADA 2015</div>
						<div class="hidden content" onclick="goToApply()">立即報名！</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<section class="ui vertical feature segment">
		<div class="ui centered page grid">
			<div class="fourteen wide column">
				<div class="ui two column center aligned stackable divided grid">
					<div class="column">
						<div class="ui icon header">
							<i class="student icon"></i>學術課程
						</div>
						<p>時間：13<sup>th</sup> Jul - 17<sup>th</sup> Jul<br>
						地點：臺北市立建國高級中學<br>
						報名費：NT$ 1000</p>
					</div>
					<div class="column">
						<div class="ui icon header">
							<i class="camera retro icon"></i>活動課程
						</div>
						<p>時間：25<sup>th</sup> Jul - 27<sup>th</sup> Jul<br>
						地點：救國團金山青年活動中心<br>
						報名費：NT$ 2500</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ui inverted vertical segment">
		<div class="ui very relaxed stackable page grid">
			<div class="row">
				<div class="column">
					<h1 class="center aligned ui inverted header">課程資訊</h1>
				</div>
			</div>
			<div class="row">
				<div class="ten wide column">
					<h3 class="ui inverted header">課程時間表</h3>
					<div class="ui inverted animated selection list">
						<div class="item">電子布告欄系統 Bulletin Board System<br>
						胡惠慈 / 1A / 實作
							<div class="right floated">BBS 站台是用來討論或聯繫感情的優良工具，<br>
							在現代多種通訊軟體充斥的年代，<br>
							將帶領學弟妹深入了解 BBS 勝於其他平台的原因。</div>
						</div>
						<div class="item">網頁前端 Front-end Development<br>
						侯舜元、許承佑 / 1CD / 實作、電子講義
							<div class="right floated">指導學生撰寫個人網頁，<br>
							藉此熟悉語法，<br>
							建立基本架構與套用版型設計。</div>
						</div>
						<div class="item">經驗傳授 Experience Impartation<br>
						林家瑜 / 3CD5B / 投影片、幹訓手冊
							<div class="right floated">將學長姊的經驗傳承給學弟妹。</div>
						</div>
					</div>
				</div>
				<div class="six wide column">
					<div class="ui form segment">
						<h3 class="ui header">授課時段代碼說明</h3>
						<p>數字 1 至 7 分別表示星期一至星期日。</p>
						<p>A 表示 08:40 至 10:10 之時段，<br>
						B 表示 10:30 至 12:00 之時段，<br>
						X 表示午間時段，<br>
						C 表示 13:40 至 15:10 之時段，<br>
						D 表示 15:30 至 17:00 之時段，<br>
						Y 表示晚間時段。</p>
						<p>例如 2CD5A 表示授課時段為：<br>
						星期二 13:40 至 15:10、15:30 至 17:00，<br>
						及星期五 08:40 至 10:10。</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ui vertical segment">
		<div class="ui stackable center aligned page grid">
			<div class="row">
				<div class="column">
					<h1 class="ui header">填寫報名表</h1>
					<div class="ui form segment">
						<p>所有資料僅供保險之用，未經當事人同意，本社不會將資料用做其他用途。</p>
						<div class="field">
							<div class="ui labeled input">
								<div class="ui label">姓名</div>
								<input name="name" type="text" placeholder="我是誰">
							</div>
						</div>
						<div class="field">
							<div class="ui label">社團</div>
							<div class="ui radio checkbox checked">
								<input name="club" type="radio" checked="checked">
								<label>建中電研社</label>
							</div>
							<div class="ui radio checkbox">
								<input name="club" type="radio">
								<label>北一資研社</label>
							</div>
						</div>
						<div class="field">
							<div class="ui label">級別</div>
							<div class="ui radio checkbox">
								<input name="year" type="radio" checked="checked">
								<label>'04 級</label>
							</div>
							<div class="ui radio checkbox">
								<input name="year" type="radio">
								<label>'05 級</label>
							</div>
							<div class="ui radio checkbox">
								<input name="year" type="radio">
								<label>'06 級</label>
							</div>
						</div>
						<div class="field">
							<div class="ui labeled input">
								<div class="ui label">生日</div>
								<input name="birth" type="text" placeholder="1999/01/01">
							</div>
						</div>						
						<div class="field">
							<div class="ui labeled input">
								<div class="ui label">行動電話</div>
								<input name="phone" type="text" placeholder="0912345678">
							</div>
						</div>
						<div class="field">
							<div class="ui labeled input">
								<div class="ui label">身份證字號</div>
								<input name="idnum" type="text" placeholder="A123456789">
							</div>
						</div>
						<div class="field">
							<div class="ui labeled input">
								<div class="ui label">電子郵件信箱</div>
								<input name="email" type="text" placeholder="username@domain.net">
							</div>
						</div>
						<div class="ui error message"></div>
						<div class="field">
							<div class="ui black animated submit button">
								<div class="visible content">送出</div>
								<div class="hidden content"><i class="right arrow icon"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="ui inverted footer vertical segment">
		<div class="ui stackable center aligned page grid">
			<div class="ten wide column">
				<div class="ui three column center aligned stackable grid">
					<div class="column">
						<h5 class="ui inverted header">建中電研社 (CKEISC)</h5>
						<div class="ui inverted list">
							<div class="item">臺北市立建國高級中學<br>
							電子計算機研習社</div>
							<div class="item">Chienkuo High School<br>
							Electronic Industrial Study Club</div>
							<div class="item">迄今為第 35 屆</div>
						</div>
					</div>
					<div class="column">
						<h5 class="ui inverted header">北一資研社 (FGISC)</h5>
						<div class="ui inverted list">
							<div class="item">臺北市立第一女子高級中學<br>
							資訊研習社</div>
							<div class="item">Taipei First Girls' High School<br>
							Information Study Club</div>
							<div class="item">迄今為第 29 屆</div>
						</div>
					</div>
					<div class="column">
						<h5 class="ui inverted header">建北電資研 (CKEFGISC)</h5>
						<div class="ui inverted list">
							<div class="item">建中電研社與北一資研社之合稱</div>
							<div class="item">兩社始終維持密切的合作關係</div>
							<div class="item">迄今已邁入第 20 年</div>
						</div>
					</div>
				</div>
			</div>
			<div class="six wide column">
				<p>Web Design by <a href="http://people.cs.nctu.edu.tw/~ywpu/" target="_blank">Yu-wen Pwu</a><br>
				Based on <a href="http://semantic-ui.com/" target="_blank">Semantic UI</a></p>
				<p>Released under the <a href="https://raw.githubusercontent.com/yuwen41200/ADA-Camp-2015/master/LICENSE" target="_blank">MIT License</a><br>
				Get Source Code from <a href="https://github.com/yuwen41200/ADA-Camp-2015" target="_blank">GitHub</a> !</p>
			</div>
		</div>
	</footer>
</body>
</html>
