<?php
/* @var $this PromotionController */
/* @var $model Promotion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'promotion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'proID'); ?>
		<?php echo $form->textField($model,'proID'); ?>
		<?php echo $form->error($model,'proID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shopID'); ?>
		<?php echo $form->textField($model,'shopID'); ?>
		<?php echo $form->error($model,'shopID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proName'); ?>
		<?php echo $form->textField($model,'proName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'proName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proCondition'); ?>
		<?php echo $form->textArea($model,'proCondition',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'proCondition'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'startDate'); ?>
		<?php //echo $form->textField($model,'startDate'); ?>
		<?php echo CHtml::activeTextField($model,'startDate',array("id"=>"startDate")); ?>
		&nbsp;(calendar appears when textbox is clicked)
		<?php $this->widget('application.extensions.calendar.SCalendar',
			array(
			'inputField'=>'startDate',
			'ifFormat'=>'%Y-%m-%d',
			));
		?>
		<?php echo $form->error($model,'startDate'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'endDate'); ?>
		<?php //echo $form->textField($model,'endDate'); ?>
		<?php echo CHtml::activeTextField($model,'endDate',array("id"=>"endDate")); ?>
		&nbsp;(calendar appears when textbox is clicked)
		<?php $this->widget('application.extensions.calendar.SCalendar',
			array(
			'inputField'=>'endDate',
			'ifFormat'=>'%Y-%m-%d',
			));
		?>
		<?php echo $form->error($model,'endDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conditionPoint'); ?>
		<?php echo $form->textField($model,'conditionPoint'); ?>
		<?php echo $form->error($model,'conditionPoint'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amountBuy'); ?>
		<?php echo $form->textField($model,'amountBuy'); ?>
		<?php echo $form->error($model,'amountBuy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unitBuy'); ?>
		<?php echo $form->textField($model,'unitBuy',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'unitBuy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amountReward'); ?>
		<?php echo $form->textField($model,'amountReward'); ?>
		<?php echo $form->error($model,'amountReward'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'unitReward'); ?>
		<?php echo $form->textField($model,'unitReward',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'unitReward'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valueReward'); ?>
		<?php echo $form->textField($model,'valueReward'); ?>
		<?php echo $form->error($model,'valueReward'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proDetail'); ?>
		<?php echo $form->textField($model,'proDetail',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'proDetail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proPic'); ?>
		<?php echo $form->textField($model,'proPic',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'proPic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'proQR'); ?>
		<?php echo $form->textField($model,'proQR',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'proQR'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>




<?php $this->endWidget(); ?>

</div><!-- form -->