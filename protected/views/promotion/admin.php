<?php
/* @var $this PromotionController */
/* @var $model Promotion */

$this->breadcrumbs=array(
	'Promotions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Promotion', 'url'=>array('index')),
	array('label'=>'Create New Card', 'url'=>array('create')),
	array('label'=>'Create New Coupon', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('promotion-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Search Promotions</h1>



<!-- Search Card -->
<?php echo CHtml::link('Search Card','#',array('class'=>'search-button')); ?>
<!--<div class="search-form" style="display:none">-->
<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<br/>

<!-- Search Coupon -->
<?php echo CHtml::link('Search Coupon','#',array('class'=>'search-button')); ?>
<!--<div class="search-form" style="display:none">-->
<div class="search-form" >
<?php $this->renderPartial('_searchCoupon',array(
	'model'=>$model,
)); ?>
</div>






<?php 

	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'promotion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'proID',
		'shopID',
		'proName',
		'proCondition',
	/*	'startDate',
		'endDate',
		'conditionPoint',
		'amountBuy',
		'unitBuy',
		'amountReward',
		'unitReward',
		'valueReward',
		'proDetail',
		'proPic',
		'proQR',
	*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); 
	
?>

