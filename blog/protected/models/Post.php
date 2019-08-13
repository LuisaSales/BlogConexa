<?php

Yii::import('application.models._base.BasePost');

class Post extends BasePost
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
	
	public function rules()
	{
		return array(
			array('title, content, status', 'required'),
			array('title', 'length', 'max'=>128),
			array('status', 'in', 'range'=>array(1,2,3)),
			array('tags', 'match', 'pattern'=>'/^[\w\s,]+$/',
				'message'=>'Tags can only contain word characters.'),
			array('tags', 'normalizeTags'),
	 
			array('title, status', 'safe', 'on'=>'search'),
		);
	}
	
	public function normalizeTags($attribute,$params)
	{
		$this->tags=Tag::array2string(array_unique(Tag::string2array($this->tags)));
	}
	
	public static function string2array($tags)
	{
		return preg_split('/\s*,\s*/',trim($tags),-1,PREG_SPLIT_NO_EMPTY);
	}
	 
	public static function array2string($tags)
	{
		return implode(', ',$tags);
	} 

	public function relations(){
    return array(
        'author' => array(self::BELONGS_TO, 'Usuario', 'idUsuario'),
        'comments' => array(self::HAS_MANY, 'Comentario', 'idPost',
        	'condition'=>'comments.status='.Comentario::STATUS_APPROVED,
        	'order'=>'comments.create_time DESC'),
        'commentCount' => array(self::STAT, 'Comentario', 'idPost',
        	'condition'=>'status='.Comentario::STATUS_APPROVED),
    );
	}

	/*Acessar o autor e comentario de um post
	public function toKnow(){
		$autor=$post->author;
		echo $autor->username;
 
		$comentario=$post->comments;
		foreach($comments as $comentario)
    	echo $comentario->content;
	}
	*/
}

	/*//embelezador de URL
	class Post extends CActiveRecord
	{
		public function getUrl()
		{
			return Yii::app()->createUrl('post/view', array(
				'idPost'=>$this->id,
				'titulo'=>$this->title,
			));
		}
	}*/