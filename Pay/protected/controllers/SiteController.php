<?php

class SiteController extends CController
{

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex(){
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('/site/homePage',array());
	}
	
	public function actionLienhe(){
		$this->render('/site/lienhe',array());
	}
	
	public function actionGioithieu(){
		$this->render('/site/gioithieu',array());
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}



	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	public function actionDataTemplate(){
		$return = array();
		$pas = Sanpham::model()->findAll(array("condition" => "type = '1'"));
		foreach($pas as $pa){
			$thisP = array();
			$thisP["id"] = $pa->id;
			$thisP["name"] = $pa->name;
			$thisP["img"] = $pa->image;
			$thisP["ch"] = array();
			$chs = Sanpham::model()->findAll(array("condition" => "parent = '$pa->id'"));
			foreach($chs as $ch){
				$thisC = array();
				$thisC["id"] = $ch->id;
				$thisC["name"] = $ch->name;
				$thisC["img"] = $ch->image;
				array_push($thisP["ch"], $thisC);
			}
			array_push($return, $thisP);
		}
		echo json_encode($return);
	}
	
	public function actionTheloai(){		
		$this->render('/site/theloai',array());
	}
	public function actionsp(){		
		$this->render('/site/sanpham',array());
	}
}