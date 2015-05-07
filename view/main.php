<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>17&times;20th 建北電資研聯合幹部訓練營</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $view_directory; ?>dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $view_directory; ?>style/jquery.datetimepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $view_directory; ?>style/main.css">
	<script>
		/* jshint ignore:start */
		var applicationStatusCode = <?php echo $application_status_code; ?>;
		var applicationStatusMessage = <?php echo $application_status_message; ?>;
		/* jshint ignore:end */
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="<?php echo $view_directory; ?>dist/semantic.min.js"></script>
	<script src="<?php echo $view_directory; ?>script/jquery.datetimepicker.js"></script>
	<script src="<?php echo $view_directory; ?>script/main.js"></script>
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
				<img src="<?php echo $view_directory; ?>image/cat.png" class="ui medium image">
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
					<h3 class="ui inverted header">必修課程</h3>
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
						<div class="item">成果發表會 Presentation<br>
						許又升、薛暐薺、蒲郁文、黃宜文 / 5A / 分組發表
							<div class="right floated">吉他：彈唱、演奏；<br>
							3ds Max：畫出自己的 avatar；<br>
							Workshop：Finish the designated project。</div>
						</div>
						<div class="item">球類大會 Ball Games<br>
						許承佑、胡惠慈 / 5CD / 分組競賽
							<div class="right floated">工程師長時間坐在椅子上，<br>
							雙眼緊盯著電腦，<br>
							是時候相約活動筋骨、揮灑青春了！</div>
						</div>
					</div>
					<div class="ui inverted section divider"></div>
					<h3 class="ui inverted header">選修課程</h3>
					<div class="ui inverted animated selection list">
						<div class="item">文字編輯器 Sublime Text<br>
						許承佑 / 1B / 實作、電子講義
							<div class="right floated">編輯器是軟體工程師不可或缺的工具之一，<br>
							本課程將介紹一個伴隨工作的好夥伴。</div>
						</div>
						<div class="item">函數程式語言 Functional Programing<br>
						陳力 / 2AB / 實作
							<div class="right floated">認識函數式編程。</div>
						</div>
						<div class="item">3D 繪圖 3ds Max<br>
						許又升 / 2CD / 實作
							<div class="right floated">從最基礎的點、線、面教起，<br>
							搭配材質和貼圖，<br>
							把現實呈現在電腦裡。</div>
						</div>
						<div class="item">Workshop: Building a Graduation Ceremony Website<br>
						蒲郁文 / 3AB / Implementation, Internet Resources
							<div class="right floated">This is a student-oriented class,<br>
							and no lectures will be provided.<br>
							You should try to finish a project by yourself,<br>
							but we will come to your aid if you need any help.<br>
							選課須知：未修過「網頁前端」者擋修本課程。</div>
						</div>
						<div class="item">程式語言入門 Python Guide<br>
						許承佑 / 4B / 實作、電子講義
							<div class="right floated">講師將藉由自身經歷闡述「自學的藝術」，<br>
							引導學生從各方尋找學習資源。</div>
						</div>
						<div class="item">LaTeX Typography<br>
						黃宜文 / 4B / 實作、紙本講義
							<div class="right floated">學習基礎 LaTeX 語言，<br>
							並深入介紹數學排版、程式碼排版，<br>
							幾種排版優勢與特色。</div>
						</div>
						<div class="item">影片剪輯觀念 Film Editing Concepts<br>
						薛暐薺 / 4CD / 實作
							<div class="right floated">擺脫轉場特效，<br>
							重新認識剪接吧！</div>
						</div>
						<div class="item">專案管理 Project Management<br>
						林家瑜 / 1B / 投影片
							<div class="right floated">讓大家試著思考當你要舉辦一場活動時，<br>
							應該從何開始！<br>
							以及如何用更有效率的方式做事情！</div>
						</div>
						<div class="item">吉他 Guitar<br>
						許又升 / 2AB / 黑板、講義
							<div class="right floated">這堂課是一個讓你開始愛上樂器的契機，<br>
							彈吉他是彈給自己聽的，<br>
							是在追求用手指在平行的軌道上行駛出一道道優美的篇章。</div>
						</div>
						<div class="item">攝影 Photography<br>
						薛暐薺 / 2CD / 投影片、外拍
							<div class="right floated">器材不是絕對，<br>
							手機也能拍出好照片。<br>
							本課將帶你認識相片的因與果。</div>
						</div>
						<div class="item">戲劇 Drama<br>
						黃宜文 / 3AB / 講述、實際演出、短片欣賞
							<div class="right floated">生命中，<br>
							每個人都在扮演屬於自己的角色，<br>
							演出不難，<br>
							但要演出得叫好又叫座卻另當別論。</div>
						</div>
						<div class="item">熱門音樂基礎 Popular Music Fundamentals<br>
						蒲郁文 / 4AB / 投影片、影片、Guitar Pro 6
							<div class="right floated">帶你掌握基本的熱門音樂元素與概念。<br>
							推薦先修課程：吉他。</div>
						</div>
						<div class="item">文書處理 Word Processing<br>
						鄭晴文、鄭琇蓉 / 4CD / 實作
							<div class="right floated">教你製作精緻文件。</div>
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
						<form action="/ada2015/index.php/act/submitFormAction" method="post">
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
							<div class="ui black animated submit button" onclick="$(this).closet('form').submit()">
								<div class="visible content">送出</div>
								<div class="hidden content"><i class="right arrow icon"></i></div>
							</div>
						</div>
						</form>
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
