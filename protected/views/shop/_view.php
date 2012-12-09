<?php
/* @var $this ShopController */
/* @var $data Shop */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('shopID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->shopID), array('view', 'id'=>$data->shopID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('couponID')); ?>:</b>
	<?php echo CHtml::encode($data->couponID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cardID')); ?>:</b>
	<?php echo CHtml::encode($data->cardID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branchID')); ?>:</b>
	<?php echo CHtml::encode($data->branchID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shopName')); ?>:</b>
	<?php echo CHtml::encode($data->shopName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shopPwd')); ?>:</b>
	<?php echo CHtml::encode($data->shopPwd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shopEmail')); ?>:</b>
	<?php echo CHtml::encode($data->shopEmail); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('shopPic')); ?>:</b>
	<?php echo CHtml::encode($data->shopPic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shopType')); ?>:</b>
	<?php echo CHtml::encode($data->shopType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shopDetail')); ?>:</b>
	<?php echo CHtml::encode($data->shopDetail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colorFish')); ?>:</b>
	<?php echo CHtml::encode($data->colorFish); ?>
	<br />

	*/ ?>

</div>