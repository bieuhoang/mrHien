<div class="titleAdmin">QUẢN LÝ TỪ KHÓA</div>
<?php
$kw = Sanpham :: model()->find(array ("condition" => "type = '12'"));
$i = "";
if($kw != null){
	$i = $kw->id;
}
$form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'upload-form',
		'action' => Yii::app ()->request->baseUrl . "/admin123465789/addsp?id=$i",
		'enableAjaxValidation' => false,
		'htmlOptions' => array (
				'enctype' => 'multipart/form-data' 
		) 
) );
?>
<input type="text" name="Sanpham[type]" value="12" style="display: none;" />
<div class="row">
	<label>Ưu tiên 1</label><input type="text" value="<?php if($kw != null) echo $kw->tomtat; ?>" name="Sanpham[tomtat]" size="100"/>
</div>
<div class="row">
	<label>Ưu tiên 2</label><input type="text" value="<?php if($kw != null) echo $kw->noidung; ?>" name="Sanpham[noidung]" size="100"/>
</div>
<div class="row buttons">
		<?php echo CHtml::submitButton('CẬP NHÂT'); ?>
	</div>

<?php $this->endWidget();?>