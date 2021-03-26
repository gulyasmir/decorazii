<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Декорации';
?>
<div class="site-index">

    <div id="home" class="banner">

		<div  class="callbacks_container">
			<ul class="rslides" id="slider3">
			<?php foreach ($banners as $banner)  { ?>
				<li>
					<div class="banner1" style="background: url(<?=$banner->image?>  ) no-repeat center; background-size: 100%;">
						<div class="container">
							<div class="banner-info">
								<h3>wood work worms</h3>
								<p><?=$banner->text?></p>
							</div>
							<div class="bubble-effect text-center">
								<?= Html::a('Смотреть работы', ['site/galereya'], ['class' => ' hvr-bubble-float-top']) ?>
							</div>
						</div>
					</div>
				</li> 
				<?php } ?>
			</ul>
		</div>
		<div class="clearfix"></div>
</div>

<div id="about" class="banner-bottom">
	<div class="container">
		<h3 class="title">Для Вас<span></span></h3>
		<div class="adt_grids">
		<div class="col-md-7  about_left wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="creative">
					<h4>Сделаем для Вас :</h4>
						<?php foreach ($services as $service)  { ?>
					<p><?= $service->title?></p>
				
					
					<?php  }  ?>
				</div>
			</div>
			<div class="col-md-5  about_right wow flipInY" data-wow-duration="1.5s" data-wow-delay="0s">
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
						<div class="icon-holder">
							<img class="img-responsive" src="/frontend/web/images/icon_1.png" alt="Для кино"/>
						</div>
						<h4 class="mission">Для кино</h4>
						<!--<p class="description">мы сделаем круто!</p>-->
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
						<div class="icon-holder">
						<img class="img-responsive" aria-hidden="true" src="/frontend/web/images/icon_2.png" alt="Для кино"/>
						</div>
						<h4 class="mission">Для театра</h4>
					
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
						<div class="icon-holder">
							<img class="img-responsive" aria-hidden="true" src="/frontend/web/images/icon_3.png" alt="Для кино"/>
						</div>
						<h4 class="mission">Для корпоративов</h4>
						
					</div>
				</div>
				<div class="col-sm-6 bottom-gds ">
					<div class="bott-img">
						<div class="icon-holder">
							<img class="img-responsive" aria-hidden="true" src="/frontend/web/images/icon_4.png" alt="Для кино"/>
						</div>
						<h4 class="mission">Для квестов</h4>
						
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>

<div id="#prots" class="services">
	<div class="container">
		<h3 class="title">Например:<span></span></h3>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<div class="col-md-3 recharge-left wow bounceInDown" data-wow-duration="1s" data-wow-delay="0s">
					  <ul class="resp-tabs-list">
						<?php foreach ($examples as $example)  { ?>
							  <li class="resp-tab-item" aria-controls="tab_item-<?=$example->id?>" role="tab"><span><?=$example->title?></span><i></i></li> 
						<?php } ?>
					  </ul>	
				</div>
				<div class="col-md-9 recharge-right wow bounceInDown" data-wow-duration="1s" data-wow-delay="0s">
					<div class="resp-tabs-container">
						<?php foreach ($examples as $example)  { ?>
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-<?=$example->id?>">
							<div class="col-md-4 product-left">
								<img class="img-responsive" src="<?=$example->image?>" alt="<?=$example->title?>"/>
							</div>
							<div class="col-md-8 product-right">
								<h4><?=$example->title?></h4>
								<?=$example->text?>
							</div>
							<div class="clearfix"></div>
						</div>
						<?php  } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="services" class="services-list">
	<div class="container">
	
		<div class="services-gds">
		<?php foreach ($bottoms as $bottom)  { ?>
			<div class="col-md-4 list-gds list-gds<?=$bottom->id?> text-center wow bounceInUp" data-wow-duration="1.5s" data-wow-delay="0s">
				<?php  if ($bottom->sort_order == 1) {  ?>
					<img class="img-responsive "  src="/frontend/web/images/i_1.png" alt="Для кино"/>
				<?php }  ?>
				<?php  if ($bottom->sort_order == 2) {  ?>
					<img class="img-responsive"  src="/frontend/web/images/i_2.png" alt="Для кино"/>
					<?php }  ?>
				<?php  if ($bottom->sort_order == 3)  {  ?>
					<img class="img-responsive"  src="/frontend/web/images/i_3.png" alt="Для кино"/>
					<?php }  ?>
				<?php  if ($bottom->sort_order == 4)  {  ?>
					<img class="img-responsive"  src="/frontend/web/images/i_6.png" alt="Для кино"/>
				<?php }  ?>
				<?php  if ($bottom->sort_order == 5)  {  ?>
					<span class="glyphicon icon glyphicon-tree-conifer" aria-hidden="true"></span>
				<?php }  ?>
				<?php   if ($bottom->sort_order == 6) { ?>	
				<img class="img-responsive"  src="/frontend/web/images/i_4.png" alt="Для кино"/>
				<?php }  ?>
				
				<h4><?=$bottom->title?></h4>
				<?=$bottom->text?>
			</div>
			
		<?php  } ?>
		
			<div class="clearfix"></div>			
		</div>
	</div>
</div>
</div>
