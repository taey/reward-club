<?php
/* @var $this ShopController */
/* @var $model Shop */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'shopID'); ?>
		<?php echo $form->textField($model,'shopID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'couponID'); ?>
		<?php echo $form->textField($model,'couponID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cardID'); ?>
		<?php echo $form->textField($model,'cardID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'branchID'); ?>
		<?php echo $form->textField($model,'branchID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shopName'); ?>
		<?php echo $form->textField($model,'shopName',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shopPwd'); ?>
		<?php echo $form->textField($model,'shopPwd',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shopEmail'); ?>
		<?php echo $form->textField($model,'shopEmail',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shopPic'); ?>
		<?php echo $form->textField($model,'shopPic',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shopType'); ?>
		<?php echo $form->textField($model,'shopType',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'shopDetail'); ?>
		<?php echo $form->textField($model,'shopDetail',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'colorFish'); ?>
		<?php echo $form->textField($model,'colorFish',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->