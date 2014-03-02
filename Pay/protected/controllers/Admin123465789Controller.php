<?php
class Admin123465789Controller extends CController {
	public $layout = 'admin';
	public function actionIndex() {
		if (isset ( Yii::app ()->user->id ) && (Yii::app ()->user->id != null) && (Yii::app ()->user->id > 0)) {
			$this->redirect ( array (
					"/admin123465789/adminHome" 
			) );
		} else {
			$user = new Users ();
			$userPosted = Yii::app ()->request->getPost ( "Users" );
			$user->email = $userPosted ["email"];
			$user->password = $userPosted ["password"];
			if ($user->login ()) {
				$this->redirect ( array (
						"/admin123465789/adminHome" 
				) );
			}
			$this->render ( '/admin/login', array (
					'user' => $user 
			) );
		}
	}
	public function actionadminHome() {
		$this->render ( '/admin/adminHome', array () );
	}
	public function actionLogout() {
		Yii::app ()->user->logout ();
		$this->redirect ( Yii::app ()->homeUrl );
	}
	public function actionThemTheLoai() {
		$sp = new Sanpham ();
		$this->render ( '/admin/themTheLoai', array (
				'model' => $sp 
		) );
	}
	public function actionthemSanpham() {
		$pa = Sanpham::model ()->findAll ( array (
				"condition" => "type = '1'" 
		) );
		$sp = new Sanpham ();
		$this->render ( '/admin/themSanPham', array (
				'model' => $sp,
				'theloais' => $pa 
		) );
	}
	public function actionBanner() {
		$sp = Sanpham::model ()->find ( array (
				"condition" => "type = '4'" 
		) );
		if ($sp == null) {
			$sp = new Sanpham ();
		}
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->type = 4;
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
		}
		$this->render ( '/admin/Suabanner', array (
				'model' => $sp 
		) );
	}
	public function actionbando() {
		$sp = Sanpham::model ()->find ( array (
				"condition" => "type = '10'" 
		) );
		if ($sp == null) {
			$sp = new Sanpham ();
		}
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->type = 10;
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
		}
		$this->render ( '/admin/Suabando', array (
				'model' => $sp 
		) );
	}
	public function actiondstl() {
		$this->render ( '/admin/dstl', array () );
	}
	public function actiondtl() {
		$id = Yii::app ()->request->getParam ( "id" );
		$thisSp = Sanpham::model ()->findByPk ( $id );
		if ($thisSp != null) {
			$chs = Sanpham::model ()->findAll ( array (
					"condition" => "parent = '$thisSp->id'" 
			) );
			foreach ( $chs as $ch ) {
				$ch->delete ();
			}
		}
		$thisSp->delete ();
		$this->redirect ( array (
				"/admin123465789/dstl" 
		) );
	}
	public function actionstl() {
		$id = Yii::app ()->request->getParam ( "id" );
		$sp = Sanpham::model ()->findByPk ( $id );
		if ($sp == null) {
			$sp = new Sanpham ();
		}
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->name = $upSp ["name"];
			$sp->noidung = $upSp ["noidung"];
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
			$this->redirect ( array (
					"/admin123465789/dstl" 
			) );
		} else {
			$this->render ( '/admin/themTheLoai', array (
					'model' => $sp 
			) );
		}
	}
	public function actionssp() {
		$pa = Sanpham::model ()->findAll ( array (
				"condition" => "type = '1'" 
		) );
		$id = Yii::app ()->request->getParam ( "id" );
		$sp = Sanpham::model ()->findByPk ( $id );
		if ($sp == null) {
			$sp = new Sanpham ();
		}
		$this->render ( '/admin/themSanPham', array (
				'model' => $sp,
				'theloais' => $pa 
		) );
	}
	public function actionsqctr() {
		$id = Yii::app ()->request->getParam ( "id" );
		$sp = Sanpham::model ()->findByPk ( $id );
		if ($sp == null) {
			$sp = new Sanpham ();
		}
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->url = $upSp ["url"];
			$sp->type = 5;
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
			$this->redirect ( array (
					"/admin123465789/dsqctr" 
			) );
		} else {
			$this->render ( '/admin/qctr', array (
					'model' => $sp 
			) );
		}
	}
	public function actionsqcf() {
		$id = Yii::app ()->request->getParam ( "id" );
		$sp = Sanpham::model ()->findByPk ( $id );
		if ($sp == null) {
			$sp = new Sanpham ();
		}
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->url = $upSp ["url"];
			$sp->type = 6;
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
			$this->redirect ( array (
					"/admin123465789/dsqcf" 
			) );
		} else {
			$this->render ( '/admin/qcph', array (
					'model' => $sp 
			) );
		}
	}
	public function actionsqct() {
		$id = Yii::app ()->request->getParam ( "id" );
		$sp = Sanpham::model ()->findByPk ( $id );
		if ($sp == null) {
			$sp = new Sanpham ();
		}
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->type = 7;
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
			$this->redirect ( array (
					"/admin123465789/dsqct" 
			) );
		} else {
			$this->render ( '/admin/qcTop', array (
					'model' => $sp 
			) );
		}
	}
	public function actiondssp() {
		$this->render ( '/admin/dssp', array () );
	}
	public function actiondsqctr() {
		$this->render ( '/admin/dsqctr', array () );
	}
	public function actiondsqcf() {
		$this->render ( '/admin/dsqcf', array () );
	}
	public function actiondsqct() {
		$this->render ( '/admin/dsqct', array () );
	}
	public function actionanht() {
		$sp = new Sanpham ();
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			$sp->type = 8;
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
			$this->redirect ( array (
					"/admin123465789/Anhds" 
			) );
		} else {
			$this->render ( '/admin/anht', array (
					'model' => $sp 
			) );
		}
	}
	public function actionanhds() {
		$this->render ( '/admin/anhds', array () );
	}
	public function actionanhx() {
		$id = Yii::app ()->request->getParam ( "id" );
		$thisSp = Sanpham::model ()->findByPk ( $id );
		$thisSp->delete ();
		$this->redirect ( array (
				"/admin123465789/anhds" 
		) );
	}
	public function actionAddSp() {
		$id = Yii::app ()->request->getParam ( "id" );
		$sp = Sanpham::model ()->findByPk ( $id );
		if ($sp == null) {
			$sp = new Sanpham ();
		}
		$upSp = Yii::app ()->request->getPost ( "Sanpham" );
		if ($upSp != null && $upSp != "") {
			if (isset ( $upSp ["trai"] ) && $upSp ["trai"] != null)
				$sp->trai = $upSp ["trai"];
			if (isset ( $upSp ["top"] ) && $upSp ["top"] != null)
				$sp->top = $upSp ["top"];
			if (isset ( $upSp ["gioithieu"] ) && $upSp ["gioithieu"] != null)
				$sp->gioithieu = $upSp ["gioithieu"];
			if (isset ( $upSp ["lienhe"] ) && $upSp ["lienhe"] != null)
				$sp->lienhe = $upSp ["lienhe"];
			if (isset ( $upSp ["phai"] ) && $upSp ["phai"] != null)
				$sp->phai = $upSp ["phai"];
			if (isset ( $upSp ["moi"] ) && $upSp ["moi"] != null)
				$sp->moi = $upSp ["moi"];
			if (isset ( $upSp ["phai"] ) && $upSp ["phai"] != null)
				$sp->phai = $upSp ["phai"];
			if (isset ( $upSp ["moi"] ) && $upSp ["moi"] != null)
				$sp->moi = $upSp ["moi"];
			if (isset ( $upSp ["thutu"] ) && $upSp ["thutu"] != null)
				$sp->thutu = $upSp ["thutu"];
			if (isset ( $upSp ["tomtat"] ) && $upSp ["tomtat"] != null)
				$sp->tomtat = $upSp ["tomtat"];
			if (isset ( $upSp ["url"] ) && $upSp ["url"] != null)
				$sp->url = $upSp ["url"];
			if (isset ( $upSp ["type"] ) && $upSp ["type"] != null)
				$sp->type = $upSp ["type"];
			if (isset ( $upSp ["parent"] ) && $upSp ["parent"] != null)
				$sp->parent = $upSp ["parent"];
			if (isset ( $upSp ["child"] ) && $upSp ["child"] != null)
				$sp->child = $upSp ["child"];
			if (isset ( $upSp ["gia"] ) && $upSp ["gia"] != null)
				$sp->gia = $upSp ["gia"];
			if (isset ( $upSp ["name"] ) && $upSp ["name"] != null)
				$sp->name = $upSp ["name"];
			if (isset ( $upSp ["tieude"] ) && $upSp ["tieude"] != null)
				$sp->tieude = $upSp ["tieude"];
			if (isset ( $upSp ["noidung"] ) && $upSp ["noidung"] != null)
				$sp->noidung = $upSp ["noidung"];
			if (isset ( $upSp ["status"] ) && $upSp ["status"] != null)
				$sp->status = $upSp ["status"];
			if (CUploadedFile::getInstance ( $sp, 'image' ) != null && CUploadedFile::getInstance ( $sp, 'image' ) != "") {
				$sp->image = CUploadedFile::getInstance ( $sp, 'image' );
				$sp->image->saveAs ( Yii::getPathOfAlias ( 'webroot.files.' ) . '/images/' . CUploadedFile::getInstance ( $sp, 'image' ) );
			}
			$sp->save ();
			$this->redirect ( array ("/admin123465789/dssp"));
		}
	}
	public function accessRules() {
		return array (
				array (
						'allow',
						'actions' => array (
								'index',
								'adminHome' 
						),
						'users' => array (
								'*' 
						) 
				),
				array (
						'allow',
						'actions' => array (
								'index',
								'adminHome',
								'ThemTheLoai',
								'themSanpham',
								'Banner',
								'qctop',
								'lh',
								'gt',
								'bando',
								'dstl',
								'dtl',
								'stl',
								'ssp',
								'dssp',
								'qctr',
								'qcph' 
						),
						'users' => array (
								'@' 
						) 
				),
				array (
						'deny',
						'users' => array (
								'*' 
						) 
				) 
		);
	}
}