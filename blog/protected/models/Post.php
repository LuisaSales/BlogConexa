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
			array('titulo, texto, categoria', 'required'),
			array('titulo', 'length', 'max'=>128),
			array('titulo', 'safe', 'on'=>'search'),
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

	public function relations()
	{
    return array(
        'author' => array(self::BELONGS_TO, 'Usuario', 'idUsuario'),
        'comentario' => array(self::HAS_MANY, 'Comentario', 'post_idPost',
        	'order'=>'comentario.data DESC'),
        'commentCount' => array(self::STAT, 'Comentario', 'post_idPost',),
    );
	}

	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			$this->data=date("Y-m-d H:i:s");
	
			if($this->isNewRecord)
			{
				$this->autor=Yii::app()->user->name;	
				$this->usuario_id=Yii::app()->user->id;
				
			}

			return true;
		}
		else
			return false;
	}
	
	public function addComment($comment)
	{
		$comment->post_idPost=$this->idPost;
    	return $comment->save();

	}

	protected function newComment($post)
	{
		$comment=new Comentario;
	 
		if(isset($_POST['ajax']) && $_POST['ajax']==='comment-form')
		{
			echo CActiveForm::validate($comment);
			Yii::app()->end();
		}
	 
		if(isset($_POST['Comentario']))
		{
			$comment->attributes=$_POST['Comentario'];
			if($post->addComment($comment))
			{
				Yii::app()->user->setFlash('commentSubmitted','Obrigado por comentar.');
				$this->refresh();
			}
		}
		return $comment;
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
