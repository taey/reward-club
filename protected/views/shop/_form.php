<?php
/* @var $this ShopController */
/* @var $model Shop */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'shop-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'shopID'); ?>
		<?php echo $form->textField($model,'shopID'); ?>
		<?php echo $form->error($model,'shopID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'couponID'); ?>
		<?php echo $form->textField($model,'couponID'); ?>
		<?php echo $form->error($model,'couponID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cardID'); ?>
		<?php echo $form->textField($model,'cardID'); ?>
		<?php echo $form->error($model,'cardID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'branchID'); ?>
		<?php echo $form->textField($model,'branchID'); ?>
		<?php echo $form->error($model,'branchID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shopName'); ?>
		<?php echo $form->textField($model,'shopName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'shopName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shopPwd'); ?>
		<?php echo $form->textField($model,'shopPwd',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'shopPwd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shopEmail'); ?>
		<?php echo $form->textField($model,'shopEmail',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'shopEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shopPic'); ?>
		<?php echo $form->textField($model,'shopPic',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'shopPic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shopType'); ?>
		<?php echo $form->dropDownList($model,'shopType',
			array(
				'0'=> 'select type',
				'1'=> 'Food',
				'2'=> 'Drink',
				'3'=> 'Sports',
				'4'=> 'Fashion'
			)); ?>
		<?php echo $form->error($model,'shopType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shopDetail'); ?>
		<?php echo $form->textArea($model,'shopDetail',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shopDetail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colorFish'); ?>
		<?php echo $form->dropDownList($model,'colorFish',
			array(
				'0'=> 'select color',
				'1'=> 'Red',
				'2'=> 'Blue',
				'3'=> 'Yellow'
			)); ?>
		<?php echo $form->error($model,'colorFish'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->