<?php


class Post extends BaseModel {
	
	protected $table = 'posts';


	// Define relationship to user (author)
	public function user() 
	{
		return $this->belongsTo('User');
	}

	public static $rules = array(
    'title' => 'required|max:100',
    'body' => 'required|max:10000'
	);

}