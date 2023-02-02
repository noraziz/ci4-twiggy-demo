<?php

namespace App\Controllers;

use \noraziz\ci4twiggy;

class Home extends BaseController
{
    private $twiggy;
	
	public function index()
    {
        return view('welcome_message');
    }
	
	public function tw1()
	{
		$this->twiggy = new \noraziz\ci4twiggy\Twiggy();
		$this->twiggy->init(__CLASS__);
		$this->twiggy->title('Hello World on App');
		$this->twiggy->layout('layout_default')->template('page_index')->display();
	}
}
