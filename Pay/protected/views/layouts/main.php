<?php /* @var $this Controller */ ?>
<script type="text/javascript">
var baseUrl = "<?php echo Yii::app()->request->baseUrl; ?>";
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" dir="ltr">
<head>
<meta name="language" content="en" />

<title>H-CARD mr Hien-0975.268.459</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="/favicon.ico" />
<meta content="CỬA HÀNG DỊCH VỤ YẾN LINH" name="GENERATOR" />
<meta content="3cdotcom.vn" name="author" />
<meta content="text/javascript" http-equiv="Content-Script-Type" />
<meta name="robots" content="INDEX, FOLLOW" />
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/jqueryslidemenu.css"
	rel="stylesheet" type="text/css" />
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/common.js"
	type="text/javascript"></script>
<script
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"
	type="text/javascript"></script>
<script
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/jqueryslidemenu.js"
	type="text/javascript"></script>
<script
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js"
	type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/All.js"
	type="text/javascript"></script>
<script
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.nivo.slider.pack.js"
	type="text/javascript"></script>
<script type="text/javascript">$(window).load(function() { $('#slider').nivoSlider();});</script>
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/js/clEditor/jquery.cleditor.css" />
<script type="text/javascript"
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/clEditor/jquery.cleditor.min.js"></script>
<meta name="description"
	content="Cung cấp các giải pháp liên quan đến In ấn, máy gia công, máy văn phòng." />
<meta name="keywords" content="In ấn, in màu A0 - A4, Máy cán màng mini" />
<meta name="title" content="Yen Linh Print" />
</head>
<body>
<?php
$banner = Sanpham::model ()->find ( array (
		"condition" => "type = '4'" 
) );
$bn = "";
if ($banner != null) {
	$bn = $banner->image;
}
?>
	<div class="container">
		<div class="col-header">
			<img style="max-height: 124px;"
				src="<?php echo Yii::app()->request->baseUrl."/files/images/".$bn; ?>"
				border="0">
		</div>
		<div id="menu_global">
			<div class="jqueryslidemenu" id="myslidemenu">
				<ul>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>">Trang chủ</a></li>
					<li><a href="<?php echo Yii::app()->request->baseUrl; ?>">Sản phẩm
							- dịch vụ</a>
						<ul class="dataTopMenu">
						<?php
						$pas = Sanpham::model ()->findAll ( array (
								"condition" => "type = '1'", 'order'=>'thutu ASC', 
						) );
						foreach ( $pas as $pa ) {
							$chs = Sanpham::model ()->findAll ( array (
									"condition" => "parent = '$pa->id'" , 'order'=>'thutu ASC',
							) );
							?>
						<li><a
								href="<?php echo Yii::app()->request->baseUrl."/site/theloai?i=".$pa->id."&_".$pa->name;?>"><?php echo $pa->name;?></a>
								<ul>
								<?php
							foreach ( $chs as $ch ) {
								?>
									<li><a
										href="<?php echo Yii::app()->request->baseUrl."/site/sp?i=".$ch->id."&_".$ch->name;?>"><?php echo $ch->name;?></a></li>
								<?php }?></ul>
						<?php }?>						
						
						
						
						
						</ul></li>
					<li><a
						href="<?php echo Yii::app()->request->baseUrl; ?>/site/gioithieu">Giới
							thiệu</a></li>
					<li><a
						href="<?php echo Yii::app()->request->baseUrl; ?>/site/lienhe">Liên
							hệ</a></li>
				</ul>
			</div>
		</div>
		<script type="text/javascript"> function SubmitSearch(){var txtkey = $("#keyword").val(); setTimeout('location.href="/Search/'+locdau(txtkey) +'/";', 100);} $('#keyword').keypress(function(e) {if(e.which ==13) $('#btnSearch').click();});</script>

		<div class="col-slide">
			<div class="txt-png"></div>
			<div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
				<?php
				$bqcTops = Sanpham::model ()->findAll ( array (
						"condition" => "top = '1'" , 'order'=>'thutu ASC',
				) );
				if ($bqcTops != null) {
					foreach ( $bqcTops as $bqcTop ) {
						
						?>
					<img class="active" alt="6"
						src="<?php echo Yii::app()->request->baseUrl."/files/images/".$bqcTop->image; ?>"
						style="max-width: 948px; max-height: 240px" />
				<?php
					}
				}
				?>
				</div>
			</div>
		</div>
		<div class="dobong"></div>

		<div class="col-body">
			<div class="col-body">
				<div class="col-left">

					<div class="box-news-id">
						<h2>Sản phẩm - dịch vụ</h2>

						<ul class="menuleft">
							<?php foreach($pas as $pa){?>
							<li><a
								href="<?php echo Yii::app()->request->baseUrl."/site/theloai?i=".$pa->id."&_".$pa->name;?>"><?php echo $pa->name;?></a></li>
							<?php }?>
						</ul>
					</div>


					<div class="box-news-id">
						<h2>In ấn - Photo nổi bật</h2>
						<marquee height="360" onmouseout="this.start()"
							onmouseover="this.stop()" direction="up" scrolldelay="28"
							scrollamount="4" style="margin: 20px 0 20px 0;">
							<ul class="photoHot">
									<?php
									$spms = Sanpham::model ()->findAll ( array (
											"condition" => "moi = '1'" , 'order'=>'thutu ASC',
									) );
									if ($spms != null) {
										foreach ( $spms as $spm ) {
											?>
									<li><a
									href="<?php echo Yii::app()->request->baseUrl.'/site/sp?i='.$spm->id.'&_'.$spm->name;?>"><img
										src="<?php echo Yii::app()->request->baseUrl."/files/images/".$spm->image; ?>"></a>
									<h1>
										<a
											href="<?php echo Yii::app()->request->baseUrl.'/site/sp?i='.$spm->id.'&_'.$spm->name;?>"><?php echo $spm->name;?></a>
									</h1></li>
							<?php }}?>
								
							</ul>
						</marquee>
					</div>

					<div class="box-news-id">
						<h2>Hỗ trợ trực tuyến</h2>
						<div class="fix">
							<ul class="support">
							<li class="ts">TRUNG TÂM DỊCH VỤ H-CARD</li>
							<li class="ol">Đc: Ngô Thị Nhậm, Hà Đông- Hà Nội</li>
							<li class="phone">Kinh doanh: Mr. Hiển</li>
							<li class="phone">Hotline: 0975.268.459</li>
							<li class="phone">Email: ............</li>
							</ul>
						</div>
					</div>

					<div class="c-adversting"></div>
				</div>

				<div class="col-right">
			<?php echo $content; ?>
				</div>
			</div>
		</div>
<?php

$bando = Sanpham::model ()->find ( array (
		"condition" => "type = '10'" , 'order'=>'thutu ASC',
) );
if ($bando != null) {
	$bandoi = $bando->image;
} else {
	$bandoi = "";
}
?>
		<div class="box-bottom">
			<!-- 	<div  class="fl-sodo">
				<img width="250" alt="Bản đồ" height="247"
					src="<?php echo Yii::app()->request->baseUrl."/files/images/".$bandoi ?>" />
			</div>
		 -->
			<ul class="box-news-bot">

			</ul>
		</div>
	</div>
	<div class="warr-foot">
		<div class="c-footer-c">
			<div class="menu-footer">
				<a href="<?php echo Yii::app()->request->baseUrl; ?>">Trang chủ</a>
				| <a href="<?php echo Yii::app()->request->baseUrl; ?>/site/lienhe">Liên
					hệ</a> |
			</div>
			<div class="footer">
				<div style="text-align: center;">
					<div style="text-align: center;">
						<span style="font-size: 20px;"><strong>TRUNG TÂM DỊCH VỤ THẺ - SIM THẺ</strong></span><br />
						<span style="font-size: 14px;"><strong>Trụ sở: 53- Ngô Thị Nhậm - Quận Hà ĐOng - TP Hà Nội</strong><br /> H-CARD mr Hien-0975.268.459</span><br /> <strong>Email:</strong>
						xxxxxxxxxx<br /> <span
							style="font-size: 14px;">
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="divAdLeft" class="dpl"
		style="display: none; position: absolute; top: 10px; left: 0px;">
		<?php
		
$mnts = Sanpham::model ()->findAll ( array (
				"condition" => "trai = '1'" , 'order'=>'thutu ASC',
		) );
		if ($mnts != null) {
			foreach ( $mnts as $mnt ) {
				$url = $mnt->url;
				if ($mnt->url == null) {
					$url = Yii::app ()->request->baseUrl . '/site/sp?i=' . $mnt->id . '&_' . $mnt->name;
				}
				?>
				<a href='<?php echo $url ; ?>' target='_blank' title=''><img
			border='0'
			src='<?php echo Yii::app()->request->baseUrl."/files/images/".$mnt->image; ?>'
			width='150' style='margin-bottom: 4px'></a>
			<?php
			}
		}
		?>
	</div>
	<div id="divAdRight" class="dpl"
		style="display: none; position: absolute; top: 10px; left: 0px;">
		<?php
		
$mnfs = Sanpham::model ()->findAll ( array (
				"condition" => "phai = '1'" , 'order'=>'thutu ASC',
		) );
		if ($mnfs != null) {
			foreach ( $mnfs as $mnf ) {
				$url = $mnf->url;
				if ($mnf->url == null) {
					$url = Yii::app ()->request->baseUrl . '/site/sp?i=' . $mnf->id . '&_' . $mnf->name;
				}
				?>
				<a href='<?php echo $url;?>' target='_blank' title=''><img
			border='0'
			src='<?php echo Yii::app()->request->baseUrl."/files/images/".$mnf->image; ?>'
			width='150' style='margin-bottom: 4px'></a>
			<?php
			}
		}
		?>
	</div>
	<script language="javascript" type="text/javascript">document.write("<script type='text/javascript' language='javascript'>MainContentW = 958;LeftBannerW = 150;RightBannerW = 150;LeftAdjust = 0;RightAdjust = 0;TopAdjust = 0;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");</script>
</body>
</html>
<script type="text/javascript">
	function ShowRightAdDiv(){
		if (document.body.clientWidth > 948){
			///document.write("");
			}
		}
</script>



