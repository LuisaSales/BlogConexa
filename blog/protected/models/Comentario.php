<?php

Yii::import('application.models._base.BaseComentario');

class Comentario extends BaseComentario
{
	const STATUS_PENDING = 1;
	const STATUS_APPROVED = 2;

	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	public function rules()
	{
		return array(
			array('texto, autor, email', 'required'),
			array('autor, email', 'length', 'max' => 128),
			array('email', 'email'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'idComent' => 'Id',
			'texto' => 'Comentário',
			'data' => 'Create Time',
			'autor' => 'Nome',
			'email' => 'Email',
			'post_id' => 'Post',
		);
	}

	protected function beforeSave()
	{
		if (parent::beforeSave()) {
			if ($this->isNewRecord)
				$this->data=date("Y-m-d H:i:s");
			return true;
		} else
			return false;
	}
}
