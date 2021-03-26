<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Галерея';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
  
   <!-- gallery -->

	<h1 class="title"><?= Html::encode($this->title) ?><span></span></h1>

	<div class="filtr-container wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
	<?php foreach ($galeries as $galerey)  { ?>
		<div class=" col-md-4 filtr-item" data-category="1, 5" data-sort="Busy streets">
			<a href="<?=$galerey->image?>" class="b-link-stripe b-animate-go  swipebox">
				<div class="item item-type-double">
					<div class="item-hover">
						<div class="item-info">
							<div class="date"><?=$galerey->title?></div>			
							<div class="line"></div>			
							<div class="headline"><?=$galerey->text?></div>
							<div class="line"></div>
						</div>
						<div class="mask"></div>
					</div>
					<div class="item-img"><img src="<?=$galerey->image?>" alt="<?=$galerey->title?>" /></div>
				</div>
			</a>
		</div>
		
	<?php  }  ?>
	   <div class="clearfix"> </div>
	</div>
</div>
	
	


