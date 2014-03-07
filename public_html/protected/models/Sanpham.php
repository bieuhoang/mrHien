<?php
class Sanpham extends AnlabActiveRecord {
	public $id;
	public $top;
	public $trai;
	public $phai;
	public $moi;
	public $thutu;
	public $gioithieu;
	public $lienhe;
	public $tomtat;
	public $url;
	public $type;
	public $parent;
	public $child;
	public $gia;
	public $name;
	public $tieude;
	public $noidung;
	public $status;
	public $image;
	public $created;
	public $updated;

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}	