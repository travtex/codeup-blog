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

	public function assignImage($inputFile) {

		
		$destination = "uploads/";
		$extension = $inputFile->getClientOriginalExtension();
		// $filename = $image->getClientOriginalName();
		$filename = uniqid() . '.' . $extension;
		$inputFile->move($destination, $filename);
		$this->attributes['image'] = "{$destination}" . "{$filename}";
	
	}

}