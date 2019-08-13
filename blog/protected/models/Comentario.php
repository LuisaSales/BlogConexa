<?php

Yii::import('application.models._base.BaseComentario');

class Comentario extends BaseComentario
{
	const STATUS_PENDING=1;
	const STATUS_APPROVED=2;
	
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}