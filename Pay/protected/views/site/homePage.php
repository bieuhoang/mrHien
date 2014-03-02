<?php 
$pas = Sanpham::model()->findAll(array("condition" => "type = '1'", 'order'=>'thutu ASC'));
foreach($pas as $pa){ ?>
<div class="box-service">
	<h2><a href="<?php echo Yii::app ()->request->baseUrl . '/site/theloai?i=' . $pa->id . '&_' . $pa->name; ?>"><?php echo $pa->name;?></a></h2>
	<div class="pd-box">
		<a href="<?php echo Yii::app ()->request->baseUrl . '/site/theloai?i=' . $pa->id . '&_' . $pa->name; ?>" ><img style="max-width: 280px;max-height: 200px;margin-bottom: 26px;" src="<?php echo Yii::app()->request->baseUrl."/files/images/".$pa->image; ?>"/></a>
		<p class="contentTheloai"><?php echo $pa->noidung; ?></p>
	</div>
	<ul class="list-service">	
	<?php $chs = Sanpham::model()->findAll(array("condition" => "parent = '$pa->id'", 'order'=>'thutu ASC'));
		foreach($chs as $ch){ ?>
			<li><a href="<?php echo Yii::app ()->request->baseUrl . '/site/sp?i=' . $ch->id . '&_' . $ch->name; ?>"><?php echo $ch->name;?></a></li>				
		<?php }?>	
	</ul>
</div>
<?php }?>