<?php
function get_full_url() {
	$https = !empty($_SERVER['HTTPS']) && strcasecmp($_SERVER['HTTPS'], 'on') === 0;
	return
	($https ? 'https://' : 'http://').
	(!empty($_SERVER['REMOTE_USER']) ? $_SERVER['REMOTE_USER'].'@' : '').
	(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : ($_SERVER['SERVER_NAME'].
			($https && $_SERVER['SERVER_PORT'] === 443 ||
					$_SERVER['SERVER_PORT'] === 80 ? '' : ':'.$_SERVER['SERVER_PORT']))).
					substr($_SERVER['SCRIPT_NAME'],0, strrpos($_SERVER['SCRIPT_NAME'], '/'));
}
$sps = Sanpham::model ()->findAll ( array (	"condition" => "image <> ''", 'order'=>'thutu ASC') );
if($sps != null){
	?>
	<table style="border: 1px solid black; width: 100%;">
		<tr style="background-color: #999;">
			<td style="border: 1px solid #888 ;min-width: 120; text-align: center;" >Hình đại diện</td>
			<td style="border: 1px solid #888 ;min-width: 120; text-align: center;" >URL</td>
			<td style="border: 1px solid #888 ;min-width: 120; text-align: center;" >Xóa</td>
		</tr>
	<?php
	
	foreach($sps as $thisSp){
		?>
		<tr style="height: 100px;">	
			<td style="border: 1px solid #888 ;min-width: 120; text-align: center;" ><img class="active" alt="6"
						src="<?php echo Yii::app()->request->baseUrl."/files/images/".$thisSp->image; ?>" style="max-width:100px; max-height:100px"/></td>
						<td style="border: 1px solid #888 ;min-width: 120; text-align: center;" ><input style="width: 500px;" type="text" value="<?php echo get_full_url()."/files/images/".$thisSp->image;?>" disabled="disabled"></td>
			<td style="border: 1px solid #888 ;min-width: 120; text-align: center;" ><a href="<?php echo Yii::app()->request->baseUrl."/admin123465789/anhx?id=".$thisSp->id;?>">Xóa</a></td>
		</tr>	
		<?php
	}?>
	</table>
	<?php
}
?>
