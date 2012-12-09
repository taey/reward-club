<?php
/* @var $this PromotionController */
/* @var $model Promotion */

$this->breadcrumbs=array(
	'Promotions'=>array('index'),
	$model->proID,
);

$this->menu=array(
	array('label'=>'List Promotion', 'url'=>array('index')),
	array('label'=>'Create Promotion', 'url'=>array('create')),
	array('label'=>'Update Promotion', 'url'=>array('update', 'id'=>$model->proID)),
	array('label'=>'Delete Promotion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->proID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Promotion', 'url'=>array('admin')),
);
?>

<h1>View Promotion #<?php echo $model->proID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'proID',
		'shopID',
		'proName',
		'proCondition',
		'startDate',
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
	),
)); ?>
