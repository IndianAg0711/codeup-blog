<?php

class Post extends BaseModel {

    protected $table = 'posts';

    public function user() 
    {
    	return $this->belongsTo('User');
    }

    public function assignImage($inputFile) {
		$file = $inputFile;
	    $destinationPath = public_path() . '/uploaded_files';
	    $extension = $file->getClientOriginalExtension();
	    $filename = uniqid() . $extension;
	    $file->move($destinationPath, $filename);
	    $this->img_path = '/uploaded_files/' . $filename;   	
    }

    public static $rules = array(
	    'title'      => 'required|max:100',
	    'body'       => 'required|max:10000'
	);

}