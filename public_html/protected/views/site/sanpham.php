<div class="box-title-c">
<?php
	$id = $_GET['i'];
	$pas = Sanpham::model()->findByPk($id);
	if(isset($pas) && $pas != null && $pas != ""){
		$nametl = "";
		$tl = Sanpham::model()->findByPk($pas->parent);
	?>
<div class="link-id"><h2><a href="<?php echo Yii::app()->request->baseUrl;?>">Trang chủ</a>
 » <a href="<?php echo Yii::app()->request->baseUrl;?>">Sản phẩm - dịch vụ</a>
 <?php if($tl!= null){?>
 » <a href="<?php echo Yii::app()->request->baseUrl."/site/theloai?i=".$tl->id;?>"><?php echo $tl->name;?></a>
 <?php }?>
 » <a href="<?php echo Yii::app()->request->baseUrl."/site/sp?i=".$pas->id;?>"><?php echo $pas->name;?></a></h2></div>
<div style="clear:both; font-size:11px; border-bottom:1px solid #ccc; padding:6px 0 6px 9px; margin-bottom:12px;"> 
</div>
<span style="color: rgb(255, 0, 0);"><strong><?php echo $pas->name;?></strong></span></br>
<img alt="<?php echo $pas->name?>" src="<?php echo Yii::app()->request->baseUrl."/files/images/".$pas->image;?>" style="float: left; width: 135px; height: 159px; margin: 10px;">
<div style="font-size: 14;font-weight: bold;color: #005fa3; margin: 10px;"><?php echo $pas->tomtat;?></div>
<span><?php echo $pas->noidung?></td>
<?php
	}
?>
</div>
</tbody></table>
</div>
<div class="list_cl">
</ul>
</div>
</div>