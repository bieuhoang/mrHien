<?php
class Object extends AnlabActiveRecord {
	public $Id;
	public $Name;
	public $Status;
	public $Created;
	public $Value;
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
?>
