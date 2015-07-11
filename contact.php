<?php include('header.php'); ?>
	<div class="content-width clearfix">
		<div class="content-column">
			<div id="contact" class="content-column-block">
				<div id="pankuzu" class="border-btm-gray">
					ぱんくずリストが入ります。
				</div>
				<h2>お問い合わせ</h2>
				<p class="discription">Route134へのお問い合わせページです。</p>
				<h3>Route134、広告掲載に関するお問い合わせ</h3>
				<p class="notice">お問い合わせにつきましては、内容によっては対応できない場合がございます。恐れ入りますが、ご了承ください。</p>
				<form class="contact-form">
					<p>
						<label>お名前<span class="required">必須</span></label>
						<input type="text" name="name" maxlength="255" placeholder="name">
					</p>
					<p>
						<label>メールアドレス<span class="required">必須</span></label>
						<input type="text" name="name" maxlength="255" placeholder="name">
					</p>
					<p>
						<label>内容<span class="required">必須</span></label>
						<textarea name="message" rows="6" maxlength="255" placeholder="message"></textarea>
					</p>
					<p>
						<input type="submit" class="button" value="submit" >
					</p>
				</form>
			</div>
			<!-- priacy end -->
		</div>
		<!-- content-column end -->
	</div>
	<!-- content-width end -->
<?php include('footer.php'); ?>