<?php
/* @var $this PromotionController */
/* @var $model Promotion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'proID'); ?>
		<?php echo $form->textField($model,'proID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proName'); ?>
		<?php echo $form->textField($model,'proName',array('size'=>50,'maxlength'=>50)); ?>
	</div>


<!--
	<div class="row">
		<?php echo $form->label($model,'proID'); ?>
		<?php echo $form->textField($model,'proID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shopID'); ?>
		<?php echo $form->textField($model,'shopID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proName'); ?>
		<?php echo $form->textField($model,'proName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proCondition'); ?>
		<?php echo $form->textField($model,'proCondition',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'startDate'); ?>
		<?php echo $form->textField($model,'startDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'endDate'); ?>
		<?php echo $form->textField($model,'endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conditionPoint'); ?>
		<?php echo $form->textField($model,'conditionPoint'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amountBuy'); ?>
		<?php echo $form->textField($model,'amountBuy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unitBuy'); ?>
		<?php echo $form->textField($model,'unitBuy',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amountReward'); ?>
		<?php echo $form->textField($model,'amountReward'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'unitReward'); ?>
		<?php echo $form->textField($model,'unitReward',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valueReward'); ?>
		<?php echo $form->textField($model,'valueReward'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proDetail'); ?>
		<?php echo $form->textField($model,'proDetail',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proPic'); ?>
		<?php echo $form->textField($model,'proPic',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'proQR'); ?>
		<?php echo $form->textField($model,'proQR',array('size'=>60,'maxlength'=>100)); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton('search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->