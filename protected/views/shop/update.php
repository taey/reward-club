<?php
/* @var $this ShopController */
/* @var $model Shop */

$this->breadcrumbs=array(
	'Shops'=>array('index'),
	$model->shopID=>array('view','id'=>$model->shopID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Shop', 'url'=>array('index')),
	array('label'=>'Create Shop', 'url'=>array('create')),
	array('label'=>'View Shop', 'url'=>array('view', 'id'=>$model->shopID)),
	array('label'=>'Manage Shop', 'url'=>array('admin')),
);
?>

<h1>Update Shop <?php echo $model->shopID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>