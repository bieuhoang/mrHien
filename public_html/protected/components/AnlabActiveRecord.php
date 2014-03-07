<?php

class AnlabActiveRecord extends CActiveRecord {
	
	public function behaviors(){
		return array(
			'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'created',
                'updateAttribute' => 'updated',
                'timestampExpression' => 'date("Y-m-d H:i:s")',
                'setUpdateOnCreate' => true,
            ),
		);
	}
}
	