<script type="text/javascript">
var baseUrl = "<?php echo Yii::app()->request->baseUrl; ?>";
</script>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi" dir="ltr">
<head>
<title></title>
<META HTTP-EQUIV="Content-Language" CONTENT="vi">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<META NAME="description" CONTENT="">
<META NAME="keywords" CONTENT="khái niệm, quảng bá web, tag, forum, technical, science, thảo luận, trao đổi">
<meta name="title" content="Thanh Xuyen Print" />
<meta content="CÔNG TY CỔ PHẦN IN THANH XUYẾN" name="GENERATOR" />
<meta content="3cdotcom.vn" name="author" />
<meta name="google-site-verification"
	content="pOsYHbGVQ1XjaJxDR1WwIvpfiaPBSuaQ0nBTtDxOPZc" />
<link rel="shortcut icon" href="/favicon.ico" />
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
</head>
<body>
	<div class="container">
		<script type="text/javascript"> function SubmitSearch(){var txtkey = $("#keyword").val(); setTimeout('location.href="/Search/'+locdau(txtkey) +'/";', 100);} $('#keyword').keypress(function(e) {if(e.which ==13) $('#btnSearch').click();});</script>

		<div class="col-body">
			<div class="col-left">
			<?php


if (isset (Yii :: app()->user->id) && (Yii :: app()->user->id != null)) {
?>
			<a href="logout">Logout</a>
			<?php


}
?>
				
				<div class="box-news-id">
					<h2>Quản lý danh muc</h2>

					<ul class="menuleft">
						<li>+ QUẢN LÝ THỂ LOẠI</li>
						<li class="lch"><div>
								<a
									href="<?php echo Yii::app()->request->baseUrl; ?>/admin123465789/themTheLoai"
									class="ch">Thêm mới</a>
							</div></li>
						<li class="lch"><div>
								<a
									href="<?php echo Yii::app()->request->baseUrl; ?>/admin123465789/dstl"
									class="ch">Danh sách</a>
							</div></li>
						<li>+ SẢN PHẨM</li>
						<li class="lch"><div>
								<a
									href="<?php echo Yii::app()->request->baseUrl; ?>/admin123465789/themSanPham"
									class="ch">Thêm mới</a>
							</div></li>
						<li class="lch"><div>
								<a
									href="<?php echo Yii::app()->request->baseUrl; ?>/admin123465789/dssp"
									class="ch">Danh sách</a>
							</div></li>
							<li>+ QUẢN LÝ DỮ LIỆU ẢNH</li>
						<li class="lch"><div>
								<a
									href="<?php echo Yii::app()->request->baseUrl; ?>/admin123465789/anht"
									class="ch">Thêm mới</a>
							</div></li>
						<li class="lch"><div>
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/admin123465789/anhds" class="ch">Danh sách</a>
							</div></li>
							
						<li><a class="ch">+ QUẢN LÝ CHUNG</a></li>
						<li class="lch"><div>
								<a
									href="<?php echo Yii::app()->request->baseUrl; ?>/admin123465789/banner"
									class="ch">BANNER</a>
							</div></li>
						<li class="lch"><div>
								<a
									href="<?php echo Yii::app()->request->baseUrl; ?>/admin123465789/lienhe" class="ch">THÔNG
									TIN LIÊN HỆ</a>
							</div></li>
						<li class="lch"><div>
								<a
									href="<?php echo Yii::app()->request->baseUrl; ?>/admin123465789/bando"
									class="ch">CẬP NHẬT BẢN ĐỒ</a>
							</div></li>
							<li class="lch"><div>
								<a
									href="<?php echo Yii::app()->request->baseUrl; ?>/admin123465789/tukhoa"
									class="ch">TỪ KHÓA</a>
							</div></li>
					</ul>
				</div>
			</div>

			<div class="col-right">
					<?php if(isset($this->breadcrumbs)):?>
				<?php


$this->widget('zii.widgets.CBreadcrumbs', array (
	'links' => $this->breadcrumbs
));
?>
			<?php endif?>	
			<?php echo "<div class='adminPages'>".$content."</div>"; ?>
				</div>
		</div>
	</div>
</body>
</html>



