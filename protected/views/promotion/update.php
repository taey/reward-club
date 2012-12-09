<?php
/* @var $this PromotionController */
/* @var $model Promotion */

$this->breadcrumbs=array(
	'Promotions'=>array('index'),
	$model->proID=>array('view','id'=>$model->proID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Promotion', 'url'=>array('index')),
	array('label'=>'Create Promotion', 'url'=>array('create')),
	array('label'=>'View Promotion', 'url'=>array('view', 'id'=>$model->proID)),
	array('label'=>'Manage Promotion', 'url'=>array('admin')),
);
?>

<h1>Update Promotion <?php echo $model->proID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>