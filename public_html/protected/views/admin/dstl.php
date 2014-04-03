<div class="titleAdmin">DANH SÁCH THỂ LOẠI SẢN PHẨM</div>
<?php
$sps = Sanpham::model ()->findAll ( array (	"condition" => "type = '1'") );
if($sps != null){
	?>
	<table style="border: 1px solid black; width: 100%;">
		<tr style="background-color: #999;">
			<td style="border: 1px solid #888 ;min-width: 120; text-align: center;" >Tên</td>
			<td style="border: 1px solid #888 ;min-width: 120; text-align: center;" >Hình đại diện</td>
			<td style="border: 1px solid #888 ;min-width: 120; text-align: center;" >Sửa</td>
			<td style="border: 1px solid #888 ;min-width: 120; text-align: center;" >Xóa</td>
		</tr>
	<?php
	
	foreach($sps as $thisSp){
		?>
		<tr style="height: 100px;">	
			<td style="border: 1px solid #888 ;min-width: 120; text-align: center;" ><?php echo $thisSp->name;?></td>
			<td style="border: 1px solid #888 ;min-width: 120; text-align: center;" ><img class="active" alt="6"
						src="<?php echo Yii::app()->request->baseUrl."/files/images/".$thisSp->image; ?>" style="max-width:100px; max-height:100px"/></td>
			<td style="border: 1px solid #888 ;min-width: 120; text-align: center;" ><a href="<?php echo Yii::app()->request->baseUrl."/admin123465789/stl?id=".$thisSp->id;?>">Sửa</a></td>
			<td style="border: 1px solid #888 ;min-width: 120; text-align: center;" ><a href="<?php echo Yii::app()->request->baseUrl."/admin123465789/dtl?id=".$thisSp->id;?>">Xóa</a></td>
		</tr>	
		<?php
	}?>
	</table>
	<?php
}
?>
