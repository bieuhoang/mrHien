<?php 
$sp = Sanpham::model ()->findAll ( array (
		"condition" => "gioithieu = '1'"
) );
if($sp == null){
	echo "TRANG CHƯA ĐƯỢC CẬP NHẬT> LIÊN HỆ ADMIN";
}else{
	echo $sp->noidung;
}
?>