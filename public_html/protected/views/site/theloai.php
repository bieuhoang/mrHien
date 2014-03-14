<div class="box-title-c">
<?php 
	$id = $_GET['i'];
	$pas = Sanpham::model()->findByPk($id);
		if(isset($pas) && $pas != null && $pas != ""){?>
			<div class="link-id"><h2><a href="<?php echo Yii::app()->request->baseUrl;?>">Trang chủ</a>
 » <a href="<?php echo Yii::app()->request->baseUrl;?>">Sản phẩm - dịch vụ</a>
 » <a href="<?php echo Yii::app()->request->baseUrl."/site/theloai?i=".$pas->id;?>"><?php echo $pas->name;?></a>
<div style="clear:both; font-size:11px; border-bottom:1px solid #ccc; padding:6px 0 6px 9px; margin-bottom:12px;"> 
</div>
			<div id="fontnewsdetail" class="content"><h1 style="display:block;"><?php echo $pas->name;?></h1>
			<img src="<?php echo Yii::app()->request->baseUrl."/files/images/".$pas->image; ?>" style="float: left; width: 135px; height: 159px; margin: 10px;"/>
			<div style="font-size: 14;font-weight: bold;color: #005fa3;"><?php echo $pas->tomtat;?></div>
			<div><?php echo $pas->noidung;?></div>
			<div class="stdo_nd_sp" style="font-size: 10pt;"><div>	&nbsp;</div>
			<table border="0" cellpadding="1" cellspacing="1" height="802" width="711">	<tbody>
			<?php
			$chs = Sanpham::model()->findAll(array("condition" => "parent = '$pas->id'", 'order'=>'thutu ASC'));
			$i = 0;
			foreach($chs as $ch){
				$i++;
				if($i%2 == 1){
					echo "<tr>";
				}
				?>
				<td style="width: 130px; vertical-align: top;"><img alt="" src="<?php echo Yii::app()->request->baseUrl."/files/images/".$ch->image;?>" style="max-width: 130px; max-height: 103px;"></td>
				<td style="width: 160px; vertical-align: top;">
				<span style="color: rgb(255, 0, 0);"><strong><?php echo $ch->name;?></strong></span></br>
				<div><?php echo $ch->noidung;?></div>
				</td>
				<?php
				if($i%2 == 0){
					echo "</tr>";
				}	
			}
			
		}
?>
</div>
</tbody></table>
</div>
<div class="list_cl">
</ul>
</div>
</div>