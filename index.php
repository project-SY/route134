<?php include('header.php'); ?>
<div class="headline content-width clearfix">
	<!-- content-column-->
	<div class="content-column">
		<a class="headline-new-post left">
			<img class="headline-thumbnail" src="./images/pic-headline-thumbnail-01.png" height="180" width="360" alt="">
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
					<img src="./images/icon-index-author-thumbnail.png" height="15" width="15" alt="">
					<h5>Ken Sayama</h5>
				</div>
			</div>
		</a>
		<a class="headline-new-post right">
			<img class="headline-thumbnail" src="./images/pic-headline-thumbnail-02.png" height="180" width="360">
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
					<img src="./images/icon-index-author-thumbnail.png" height="15" width="15" alt="">
					<h5>Ken Sayama</h5>
				</div>
			</div>
		</a>
	</div>
	<!-- content-column end-->
	<!--sidebar-column-->
	<div class="sidebar-column">
		<div id="sidebar">
			<div id="weather-area" class="sidebar-column-block">
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
			<div id="pick-up-content" class="sidebar-column-block">
				<a href="#"><img src="./images/pic-pick-up-img.png" alt=""></a>
			</div>
		</div>
	</div>
	<!--sidebar-colmun end-->
</div>
<div class="instragram-area">
	<div class="instragram-area-inner content-width clearfix">
		<h4>湘南ライフをInstragramでシェア</h4>
		<ul>
			<li><a href="#"><img src="./images/pic-instragram-01.png" alt=""></a></li>
			<li><a href="#"><img src="./images/pic-instragram-02.png" alt=""></a></li>
			<li><a href="#"><img src="./images/pic-instragram-03.png" alt=""></a></li>
			<li><a href="#"><img src="./images/pic-instragram-04.png" alt=""></a></li>
			<li><a href="#"><img src="./images/pic-instragram-05.png" alt=""></a></li>
			<li><a href="#"><img src="./images/pic-instragram-06.png" alt=""></a></li>
			<li><a href="#"><img src="./images/pic-instragram-07.png" alt=""></a></li>
			<li><a href="#"><img src="./images/pic-instragram-08.png" alt=""></a></li>
		</ul>
		<div class="instragram-area-info">
			<i class="fa fa-camera"></i>
		</div>
	</div>
</div>

<?php include('footer.php'); ?>