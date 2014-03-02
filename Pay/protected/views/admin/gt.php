<div class="titleAdmin"> QUẢN LÝ TRANG GIỚI THIỆU</div>
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
	<label for="Sanpham_parent">Nội dung</label>
	<textarea id="input" name="Sanpham[noidung]"></textarea>
</div>
<div class="row buttons">
		<?php echo CHtml::submitButton('CẬP NHÂT'); ?>
	</div>

<?php $this->endWidget();?>
<script type="text/javascript">
   $("#input").cleditor();
</script>