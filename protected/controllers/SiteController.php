<?php

class SiteController extends CController
{
	public function actionIndex() {
		$connection=Yii::app()->db;
		$command=$connection->createCommand('select * from version');
		$versions=$command->queryAll();
		$this->render('index', array('versions'=> $versions));
	}	
}
?>
