<table>
<?php 
	$pas = Sanpham::model()->findAll(array("condition" => "type = '1'", 'order'=>'thutu ASC'));
	$i = 0;
	foreach($pas as $pa){		
			$i= $i + 1;
			if($i%2 == 1)echo "<tr style='vertical-align: top;'>";
?>
				<td style="border: 1px solid #ccc; border-radius: 6px;background: white;">
					<div class="box-service" style="border: none;">
						<h2><a href="<?php echo Yii::app ()->request->baseUrl . '/site/theloai?i=' . $pa->id . '&_' . $pa->name; ?>"><?php echo $pa->name;?></a></h2>
						<div class="pd-box">
						<a href="<?php echo Yii::app ()->request->baseUrl . '/site/theloai?i=' . $pa->id . '&_' . $pa->name; ?>">
							<img style="width: 200px;margin-bottom: 26px;" src="<?php echo Yii::app()->request->baseUrl."/files/images/".$pa->image; ?>"/>
						</a>	
							<div class="contentTheloai style="font-size: 20px;"><?php echo $pa->tomtat; ?></div>
							<ul class="list-service">
							<?php $chs = Sanpham::model()->findAll(array("condition" => "parent = '$pa->id'", 'order'=>'thutu ASC'));
								foreach($chs as $ch){ ?>
									<li><a href="<?php echo Yii::app ()->request->baseUrl . '/site/sp?i=' . $ch->id . '&_' . $ch->name; ?>"><?php echo $ch->name;?></a></li>				
								<?php }?>	
							</ul>
						</div>
					</div>
				</td>
			<?php if($i%2 == 0) echo "</tr>";
	}?>
</table>