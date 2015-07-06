<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<title>ADA 2015 選課囉！</title>
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.0.0/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $web_root; ?>/view/style/form.css">
	<script>
		/* jshint ignore:start */
		var applicationStatusCode = <?php echo $application_status_code; ?>;
		var applicationStatusMessage = <?php echo $application_status_message; ?>;
		/* jshint ignore:end */
	</script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.0.0/semantic.min.js"></script>
	<script src="<?php echo $web_root; ?>/view/script/form.js"></script>
</head>
<body>
	<div class="ui info message">
		<div class="header">每個時段請選擇一門專業課程或一門通識課程。</div>
		<form class="ui form" name="sendForm" action="<?php echo $web_root; ?>/index/ctl/enroll/act/submitFormAction" method="post">
			<div class="field">
				<label for="key">請輸入您的選課金鑰</label>
				<input type="text" name="key">
			</div>
			<div class="grouped fields">
				<label for="1B">授課時段：1B</label>
				<div class="field">
					<div class="ui radio checkbox">
						<input type="radio" name="1B" checked="" tabindex="0" class="hidden" value="文字編輯器 Editors">
						<label>文字編輯器 Editors</label>
					</div>
				</div>
				<div class="field">
					<div class="ui radio checkbox">
						<input type="radio" name="1B" tabindex="0" class="hidden" value="專案管理 Project Management">
						<label>專案管理 Project Management</label>
					</div>
				</div>
			</div>
			<div class="grouped fields">
				<label for="2AB">授課時段：2AB</label>
				<div class="field">
					<div class="ui radio checkbox">
						<input type="radio" name="2AB" checked="" tabindex="0" class="hidden" value="函數程式語言 Functional Programing">
						<label>函數程式語言 Functional Programing</label>
					</div>
				</div>
				<div class="field">
					<div class="ui radio checkbox">
						<input type="radio" name="2AB" tabindex="0" class="hidden" value="吉他 Guitar">
						<label>吉他 Guitar</label>
					</div>
				</div>
			</div>
			<div class="grouped fields">
				<label for="2CD">授課時段：2CD</label>
				<div class="field">
					<div class="ui radio checkbox">
						<input type="radio" name="2CD" checked="" tabindex="0" class="hidden" value="3D 繪圖 3ds Max">
						<label>3D 繪圖 3ds Max</label>
					</div>
				</div>
				<div class="field">
					<div class="ui radio checkbox">
						<input type="radio" name="2CD" tabindex="0" class="hidden" value="攝影 Photography">
						<label>攝影 Photography</label>
					</div>
				</div>
			</div>
			<div class="grouped fields">
				<label for="3AB">授課時段：3AB</label>
				<div class="field">
					<div class="ui radio checkbox">
						<input type="radio" name="3AB" checked="" tabindex="0" class="hidden" value="Workshop: Building a Graduation Ceremony Website">
						<label>Workshop: Building a Graduation Ceremony Website</label>
					</div>
				</div>
				<div class="field">
					<div class="ui radio checkbox">
						<input type="radio" name="3AB" tabindex="0" class="hidden" value="戲劇 Drama">
						<label>戲劇 Drama</label>
					</div>
				</div>
			</div>
			<div class="grouped fields">
				<label for="4AB">授課時段：4AB</label>
				<div class="field">
					<div class="ui radio checkbox">
						<input type="radio" name="4AB" checked="" tabindex="0" class="hidden" value="程式語言入門 Python Guide">
						<label>程式語言入門 Python Guide</label>
					</div>
				</div>
				<div class="field">
					<div class="ui radio checkbox">
						<input type="radio" name="4AB" tabindex="0" class="hidden" value="熱門音樂基礎 Popular Music Fundamentals">
						<label>熱門音樂基礎 Popular Music Fundamentals</label>
					</div>
				</div>
			</div>
			<div class="grouped fields">
				<label for="4CD">授課時段：4CD</label>
				<div class="field">
					<div class="ui radio checkbox">
						<input type="radio" name="4CD" checked="" tabindex="0" class="hidden" value="影片剪輯觀念 Film Editing Concepts">
						<label>影片剪輯觀念 Film Editing Concepts</label>
					</div>
				</div>
				<div class="field">
					<div class="ui radio checkbox">
						<input type="radio" name="4CD" tabindex="0" class="hidden" value="文書處理 Word Processing">
						<label>文書處理 Word Processing</label>
					</div>
				</div>
			</div>
			<div class="ui submit button" onclick="document.sendForm.submit();">送出</div>
		</form>
	</div>
</body>
</html>
