	<nav class="navbar navbar-default navbar-static-top" style="padding-top: 13px;">
	  	<div class="container">
	        <div class="navbar-header">	          	
	          	<a class="navbar-brand" id="head-logo" href="/"><b>MUSIO</b></a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse navbar-right">	          	
	          	<ul class="nav navbar-nav">
		          	<li class="dropdown">
		              <a href="#" id="a-language" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="./public/images/icon_lang.png" style="margin-top:-3px"> Language <span class="caret"></span></a>
		              <ul class="dropdown-menu dropdown-style" style="border-top-left-radius:4px; border-top-right-radius:4px;">
		                <li><a href="#" name="language" id="en">English</a></li>
		                <li role="separator" class="divider"></li>
		                <li><a href="#" name="language" id="kr">한국어</a></li>
		                <li role="separator" class="divider"></li>
		                <li><a href="#" name="language" id="jp">日本語</a></li>
		                <li role="separator" class="divider"></li>
		                <li><a href="#" name="language" id="cn">中文 (中国)</a></li>
		              </ul>
		            </li>
	            </ul>
	        </div>
	    </div>
	</nav>

	<!-- Web -->
	<div id="main-video-wrap" class="hidden-xs hidden-sm">		
		<video class="main-video"  muted="muted" preload="auto" loop="loop" autoplay="true" type="video/mp4">
			<source src="./public/images/video/Themusio_ani.mp4" type="video/mp4">
		</video>
	</div>

	<div id="main-video-wrap-text" class="text-center">
		<div class="container">
			<div class="col-xs-12">
				<img src="./public/images/logo.png" class="main-logo">
			</div>
	    	<p class="main-font"><?=lang('main_index_1');?></p>
	    	<p class="orig-price"><s>$<?=ORIG_PRICE;?>~</s></p>
	    	<p class="main-font2">$<?=PRICE;?>~</p>
	    	<button data-celery="55e802bde0a1f903007ea103" data-celery-version="v2" class="btn btn-pre-order pre-order-style btn-lg" style="margin-top: -15px;"><b><?=lang('main_index_2');?></b></button>
			<script async type="text/javascript" src="https://www.trycelery.com/js/celery.js"></script>
	    	<p class="main-font3"><?=lang('main_index_2_1');?></p>
	    	<img src="./public/images/arrow_lower.png" class="arrow-lower" onmouseenter="this.src = './public/images/arrow_lower_on.png'" onmouseleave="this.src = './public/images/arrow_lower.png'">
	    </div>
	</div>
	<!-- Web end. -->

	<!-- Mobile or Tablet -->
	<div id="main-video-wrap-static" style="display:none;">
	    <div class="text-center">
	    	<img src="./public/images/logo.png" class="main-logo" style="margin-top:70px;">
	    	<p class="main-font"><?=lang('main_index_1');?></p>
	    	<p class="orig-price"><s>$<?=ORIG_PRICE;?>~</s></p>
	    	<p class="main-font2" style="margin-top: -20px;">$<?=PRICE;?>~</p>
	    	<button data-celery="55e802bde0a1f903007ea103" data-celery-version="v2" class="btn btn-pre-order pre-order-style btn-lg" style="margin-top: -15px;"><b><?=lang('main_index_2');?></b></button>
			<script async type="text/javascript" src="https://www.trycelery.com/js/celery.js"></script>
	    	<p class="main-font3"><?=lang('main_index_2_1');?></p>
	    	<!-- <img src="./public/images/arrow_lower.png" class="arrow-lower" onmouseenter="this.src = './public/images/arrow_lower_on.png'" onmouseleave="this.src = './public/images/arrow_lower.png'"> -->
	    </div>
	</div>
	<!-- Mobile or Tablet end. -->
	<!-- Main video end. -->	

	<div id="wrap">
		<div class="row article-box-talking text-center" style="background-color: #31afc3;">
			<div class="container" >
				<p class="article-title"><b><?=lang('main_index_3');?></b></p>
				<p class="article-text"><?=lang('main_index_4');?></p>			
				
				<div class="box-background-img">
					<div>
					<a href="#modal">					
						<img src="./public/images/img1.png" id="video_play_img" class="article-img" onmouseenter="this.src = './public/images/img1_on.png'" onmouseleave="this.src = './public/images/img1.png'">
					</a>
					</div>
				</div>

				<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc" style="height: 360px;">
				  	<div id="youtube_player"></div>
				</div>	
			</div>			
		</div>
		
		<div class="row article-box text-center" style="background-color: #5d5a90;">
			<div class="container" >
				<p class="article-title"><b><?=lang('main_index_5');?></b></p>
				<p class="article-text"><?=lang('main_index_6');?></p>			
				<div class="box-background-img">
					<img src="./public/images/img2.png" class="article-img">
				</div>
			</div>
		</div>
		
		<div class="row article-box text-center" style="background-color: #e74079;">
			<div class="container" >
				<p class="article-title"><b><?=lang('main_index_7');?></b></p>
				<p class="article-text"><?=lang('main_index_8');?></p>			
				<img src="./public/images/img3.png" class="article-img" style="margin-top: 25px;">
			</div>
		</div>
	
		<div class="row article-box text-center" style="background-color: #f0f0f0;">
			<div class="container" >
				<p class="article-title" style="color:#333;"><b><?=lang('main_index_9');?></b></p>
				<p class="article-text" style="color:#333;"><?=lang('main_index_10');?></p>			
				<img src="./public/images/img4.png" class="article-img-best-contents" style="margin-top: 25px;">
			</div>
		</div>

		<div class="row article-box text-center">			
			<img src="./public/images/4_press.jpg" class="article-img" style="margin-top: 25px;">
		</div>
		
		<div class="row article-box text-center box-background-img-features" style="background-color: #2b2929;">
			<div class="container" >
				<p class="article-title" style="color:#FFF886;"><b><?=lang('main_index_11');?></b></p>
				<p class="article-text" style="color:#FFF886;"><?=lang('main_index_12');?></p>
				<img src="./public/images/img5.png" class="article-img" style="margin-top: 25px;">
			</div>
		</div>
			
		<div class="row article-box text-center" style="background-color: #f9ee85;">
			<p class="article-title" style="color:#333;"><b><?=lang('main_index_13');?></b></p>
			<p class="article-text" style="color:#333;"><?=lang('main_index_14');?></p>
			

			<div class="container component-container">
				<div class="col-xs-12">
					<img src="./public/images/k1.png" class="view-img">
				</div>
				<div class="col-xs-12" style="padding-left:0px; padding-right:0px;">
					<img src="./public/images/k_tit.png" class="view-img">
				</div>

				<div class="col-xs-6 component-block">
					<div class="view view-fifth">
	                    <img src="./public/images/k2.png" class="view-img"/>	                    
	                    <!-- <div class="mask">
	                        <h2>Sophy</h2>
	                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
	                    </div> -->
                	</div>
				</div>			

				<div class="col-xs-6 component-block">
					<div class="view view-fifth">
	                    <img src="./public/images/k3.png" class="view-img"/>
	                    <div class="mask">
	                        <h2><?=lang('main_index_15');?></h2>
	                        <p><?=lang('main_index_16');?></p>
	                    </div>
                	</div>
				</div>				

				<div class="col-xs-6 component-block">
					<div class="view view-fifth">
	                    <img src="./public/images/k4.png" class="view-img"/>
	                    <div class="mask">
	                        <h2><?=lang('main_index_17');?></h2>
	                        <p><?=lang('main_index_18');?></p>
	                    </div>
                	</div>
				</div>

				<div class="col-xs-6 component-block">
					<div class="view view-fifth">
	                    <img src="./public/images/k5.png" class="view-img"/>
	                    <div class="mask">
	                        <h2><?=lang('main_index_19');?></h2>
	                        <p><?=lang('main_index_20');?></p>
	                    </div>
                	</div>
				</div>

				<div class="col-xs-6 component-block">
					<div class="view view-fifth">
	                    <img src="./public/images/k6.png" class="view-img"/>
	                    <div class="mask">
	                        <h2><?=lang('main_index_21');?></h2>
	                        <p><?=lang('main_index_22');?></p>
	                    </div>
                	</div>
				</div>

				<div class="col-xs-6 component-block">
					<div class="view view-fifth">
	                    <img src="./public/images/k7.png" class="view-img"/>
	                    <div class="mask">
	                        <h2><?=lang('main_index_23');?></h2>
	                        <p><?=lang('main_index_24');?></p>
	                    </div>
                	</div>
				</div>				
				
			</div> <!-- container end. -->		

			<p class="bottom-price2"><s>$<?=ORIG_PRICE;?>~</s></p>
			<p class="bottom-price">$<?=PRICE;?>~</p>
			
		</div>
		<div class="text-center">			
			<button data-celery="55e802bde0a1f903007ea103" data-celery-version="v2" class="btn btn-pre-order pre-order-style btn-lg" style="margin-top:-27px;"><b><?=lang('main_index_2');?></b></button>
			<script async type="text/javascript" src="https://www.trycelery.com/js/celery.js"></script>
		</div>
	
		<div class="row text-center" style="margin-top:90px;">
			<div class="container" >
				<p class="article-title" style="color:#2b2929; font-size:80px; font-weight: 900;">MUSIO</p>
				<p class="article-text" style="font-size:40px; margin-top: 90px; color:#333; line-height: 1;"><b><?=lang('main_index_25');?></b></p>
				<p class="article-text" style="font-size:30px; margin-top: 50px; color:#333;"><b><?=lang('main_index_26');?></b></p>
				<p class="article-text" style="font-size:30px; margin-top: -10px; color:#e81f79;"><b><?=lang('main_index_27');?></b></p>
				<br>
				<a href="https://www.indiegogo.com/projects/musio-your-curious-new-friend" target="_blank" class="btn shipping-btn shipping-btn-indiegogo btn-lg">Musio Indiegogo Campaign <img src="./public/images/arrow_go.png" style="width:11%;"></a>
				<p class="musios"><?=lang('main_index_28')?></p>
			</div>
		</div>		
	</div>
