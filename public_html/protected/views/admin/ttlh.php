<div class="titleAdmin">QUẢN LÝ THÔNG TIN LIÊN HỆ</div>
<?php
$ttlh = Sanpham :: model()->find(array ("condition" => "type = '11'"));
$i = "";
if ($ttlh != null) {
	$i = $ttlh->id;
}
$form = $this->beginWidget('CActiveForm', array (
	'id' => 'upload-form',
	'action' => Yii :: app()->request->baseUrl . "/admin123465789/addsp?id=$i",
	'enableAjaxValidation' => false,
	'htmlOptions' => array (
		'enctype' => 'multipart/form-data'
	)
));
?>
<input type="text" name="Sanpham[type]" value="11" style="display: none;" />
<div class="row">
	<label>Tên Doanh nghiệp</label><input type="text" value="<?php if($ttlh != null) echo $ttlh->tomtat; ?>" name="Sanpham[tomtat]" size="100"/>
</div>
<div class="row">
	<label>Địa chỉ</label><input type="text" value="<?php if($ttlh != null) echo $ttlh->url; ?>" name="Sanpham[url]" size="100"/>
</div>
<div class="row">
	<label>Người liên hệ</label><input type="text" value="<?php if($ttlh != null) echo $ttlh->gia; ?>" name="Sanpham[gia]" size="100"/>
</div>
<div class="row">
	<label>Điện thoại</label><input type="text" value="<?php if($ttlh != null) echo $ttlh->name; ?>" name="Sanpham[name]" size="100"/>
</div>
<div class="row">
	<label>Email</label><input type="text" value="<?php if($ttlh != null) echo $ttlh->noidung; ?>" name="Sanpham[noidung]" size="100"/>
</div>
<div class="row">
	<label>Yahoo</label><input type="text" value="<?php if($ttlh != null) echo $ttlh->tieude; ?>" name="Sanpham[tieude]" size="100"/>
</div>
<div class="row">
	<label>Skype</label><input type="text" value="<?php if($ttlh != null) echo $ttlh->image; ?>" name="Sanpham[image]" size="100"/>
</div>
<div class="row buttons">
		<?php echo CHtml::submitButton('CẬP NHÂT'); ?>
	</div>

<?php $this->endWidget();?>