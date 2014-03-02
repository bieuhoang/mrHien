<?php

class AuthUser extends CActiveRecord {
	
	public $authId;
	public $type;
	public $name;
	public $title;
	public $description;
	public $bizrule;
	public $data;
	public $ordering;
	public $status;
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
	
	
}