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

    public function renderBody($body) {
    	$parsedown = new Parsedown();
		$parsed = $parsedown->parse($body);
		$config = HTMLPurifier_Config::createDefault();
		$purifier = new HTMLPurifier($config);
		$cleanHTML = $purifier->purify($parsed);
		return $cleanHTML;
    }

    public static $rules = array(
	    'title'      => 'required|max:100',
	    'body'       => 'required|max:10000'
	);

}