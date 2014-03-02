<div class="titleAdmin"> QUẢN LÝ QUẢNG CÁO TREN</div>
<?php
$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'upload-form',
		'action' => Yii::app ()->request->baseUrl . "/admin123465789/addsp",
		'enableAjaxValidation' => false,
		'htmlOptions' => array (
				'enctype' => 'multipart/form-data' 
		) 
) );
?>
<input type="text" name="Sanpham[type]" value="7" style="display: none;" />
<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model, 'image');?>
		<?php echo $form->error($model,'image'); ?>
</div>
<div class="row buttons">
		<?php echo CHtml::submitButton('UPLOAD'); ?>
	</div>
<?php $this->endWidget();?>