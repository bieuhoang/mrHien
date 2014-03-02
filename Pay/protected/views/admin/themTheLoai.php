
<div class="titleAdmin">QUẢN LÝ THỂ LOẠI SẢN PHẨM</div>
<?php
$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'upload-form',
		'action' => Yii::app ()->request->baseUrl . "/admin123465789/addsp?id=".Yii::app ()->request->getParam ( "id" ),
		'enableAjaxValidation' => false,
		'htmlOptions' => array (
				'enctype' => 'multipart/form-data' 
		) 
) );
?>
<div class="row">
	<label>Vị trí hiển thị</label></br> <input type="checkbox"
		name="Sanpham[trai]" value="1" />Trái</br> <input type="checkbox"
		name="Sanpham[phai]" value="1" />Phải</br> <input type="checkbox"
		name="Sanpham[moi]" value="1" />Sản phẩm mới</br> <input
		type="checkbox" name="Sanpham[top]" value="1" />Quảng cáo trên</br> <input
		type="checkbox" name="Sanpham[gioithieu]" value="1" />Giới thiệu</br>
	<input type="checkbox" name="Sanpham[lienhe]" value="1" />Liên hệ</br>
</div>
<div class="row">
	<label>Thứ tự hiển thị</label><input type="text" name="Sanpham[thutu]" />
</div>
<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model, 'image');?>
		<?php echo $form->error($model,'image'); ?>
	</div>

<div class="row">
	<label for="Sanpham_parent">Giới thiệu tóm tắt</label>
	<textarea id="input" name="Sanpham[noidung]"></textarea>
</div>
<input type="text" name="Sanpham[type]" value="1" style="display: none;" />
<div class="row buttons">
		<?php echo CHtml::submitButton('CẬP NHÂT'); ?>
	</div>

<?php $this->endWidget(); ?>

<script type="text/javascript">
$("#input").val('<?php echo $model->noidung;?>');
$("#input").cleditor();
   </script>