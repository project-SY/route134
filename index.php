<?php include('header.php'); ?>
<div class="headline content-width clearfix">
	<div class="left-column">
		<a class="l-block">
			<img src="./images/pic-headline-thumbnail-01.png" height="180" width="360" alt="">
			<h4>
				まるで海外のリゾート地♥ 湘南のオシャレなビーチハウスで週末を満喫しよう
			</h4>
			<p>
				いろいろとアクティブなイベントが多い夏。コーディネートの動きやす
	さが重要となってくるけれど、やっ...
			</p>
			<div class="headline-info">
				<div class="headline-category lifestyle">
					<h6>ライフスタイル</h6>
				</div>
				<div class="headline-author">
					
				</div>
			</div>
		</a>
		<div class="r-block">
			<img src="./images/pic-headline-thumbnail-02.png" height="180" width="360">
			<h4>
				まるで海外のリゾート地♥ 湘南のオシャレなビーチハウスで週末を満喫しよう
			</h4>
			<p>
				いろいろとアクティブなイベントが多い夏。コーディネートの動きやす
	さが重要となってくるけれど、やっ...
			</p>
		</div>
	</div>
	<div class="right-column">
		<div id="sidebar">
			<div id="weather-area">
				<time>
					<?php
						print date("n/j");
						print '<br />';
						print date("(D)");
					?>
				</time>
				<!--weather api area -->
				<div class="weather-api-area">
				</div>
				<!--weather api area end -->
			</div>
			<div id="pick-up-content">
				<a href="#"><img src="./images/pic-pick-up-img.png" alt=""></a>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>