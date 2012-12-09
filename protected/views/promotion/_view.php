<?php
/* @var $this PromotionController */
/* @var $data Promotion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('proID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->proID), array('view', 'id'=>$data->proID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shopID')); ?>:</b>
	<?php echo CHtml::encode($data->shopID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proName')); ?>:</b>
	<?php echo CHtml::encode($data->proName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proCondition')); ?>:</b>
	<?php echo CHtml::encode($data->proCondition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startDate')); ?>:</b>
	<?php echo CHtml::encode($data->startDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endDate')); ?>:</b>
	<?php echo CHtml::encode($data->endDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conditionPoint')); ?>:</b>
	<?php echo CHtml::encode($data->conditionPoint); ?>
	<br />

	

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('amountBuy')); ?>:</b>
	<?php echo CHtml::encode($data->amountBuy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unitBuy')); ?>:</b>
	<?php echo CHtml::encode($data->unitBuy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amountReward')); ?>:</b>
	<?php echo CHtml::encode($data->amountReward); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unitReward')); ?>:</b>
	<?php echo CHtml::encode($data->unitReward); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valueReward')); ?>:</b>
	<?php echo CHtml::encode($data->valueReward); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proDetail')); ?>:</b>
	<?php echo CHtml::encode($data->proDetail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proPic')); ?>:</b>
	<?php echo CHtml::encode($data->proPic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('proQR')); ?>:</b>
	<?php echo CHtml::encode($data->proQR); ?>
	<br />

	*/ ?>

</div>