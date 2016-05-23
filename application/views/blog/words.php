<section id="main" ng-app="myApp" ng-controller="myCtrl">
	<h2><?php echo $title; ?></h2>
	
	<section class="saywords">
		<div class="w_t">-> 来，说点什么。</div>
		<textarea class="w_val" name="" id="" cols="30" rows="10"></textarea>
		<input class="w_contact" type="text" placeholder="写上你的联系方式(手机/邮箱)">
		<div class="w_btn">确定</div>
	</section>

	<section class="words">
		<div class="words_t">游客留言</div>
		<ul class="w_list">
			<?php foreach ($all_words as $key => $value) {?>
				<li><p><?php echo $value['word'];?></p></li>
			<?php } ?>
		</ul>
		
	</section>
</section>