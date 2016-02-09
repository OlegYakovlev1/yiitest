<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo'); ?>
<!--		--><?php //echo $model->getPhoto(); ?>
		<?php echo CHtml::image(Yii::app()->baseUrl . '/images/' . $model->photo); ?>
<!--		--><?php //echo CHtml::activeFileField($model, 'photo'); ?>
		<?php echo $form->fileField($model, 'photo', array('data-header'=>'Выберите файл')); ?>

		<?php echo $form->error($model,'photo'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'about'); ?>
		<?php echo $form->textField($model,'about',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'about'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->