<div class="titleAdmin">QUẢN LÝ SẢN PHẨM</div>
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
<input type="text" name="Sanpham[type]" value="3" style="display: none;" />
<div class="row">
	<label for="Sanpham_parent">Chọn thể loại</label> <select
		name="Sanpham[parent]" id="Sanpham_parent">
		<option value="0">--Chọn thể loại--</option>	
		<?php foreach ($theloais as $theloai) { ?>
			<option value="<?php echo $theloai->id;?>"><?php echo $theloai->name;?></option>		
		<?php }?>
	</select>
</div>
<div class="row">
	<label>Vị trí hiển thị</label></br><label></label> <input type="checkbox"
		name="Sanpham[trai]" value="1" />Trái</br><label></label> <input type="checkbox"
		name="Sanpham[phai]" value="1" />Phải</br><label></label> <input type="checkbox"
		name="Sanpham[moi]" value="1" />Sản phẩm mới</br><label></label> <input
		type="checkbox" name="Sanpham[top]" value="1" />Quảng cáo trên</br><label></label> <input
		type="checkbox" name="Sanpham[gioithieu]" value="1" />Giới thiệu</br><label></label>
	<input type="checkbox" name="Sanpham[lienhe]" value="1" />Liên hệ</br>
</div>
<div class="row">
	<label>Thứ tự hiển thị</label><input type="text" name="Sanpham[thutu]" />
</div>
<div class="
<div   class="row loaisp"></div>
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
	<label for="Sanpham_parent">Tóm tắt</label>
	<textarea name="Sanpham[tomtat]"></textarea>
</div>
<div class="row">
	<label for="Sanpham_parent">Nội dung</label>
	<textarea id="input" name="Sanpham[noidung]"></textarea>
</div>
<div class="row buttons">
		<?php echo CHtml::submitButton('CẬP NHÂT'); ?>
	</div>

<?php $this->endWidget();?>
<script type="text/javascript">
	$("#input").val('<?php echo $model->noidung;?>');
	$("#input").cleditor();
</script>