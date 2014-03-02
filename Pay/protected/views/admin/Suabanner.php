<div class="titleAdmin"> QUẢN LÝ BANNER</div>
<?php

$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'upload-form',
		'enableAjaxValidation' => false,
		'htmlOptions' => array (
				'enctype' => 'multipart/form-data' 
		) 
) );
?>
<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model, 'image');?>
		<?php echo $form->error($model,'image'); ?>
</div>
<div class="row buttons">
		<?php echo CHtml::submitButton('UPLOAD'); ?>
	</div>
<?php $this->endWidget();?>