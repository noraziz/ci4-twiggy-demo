<?php
namespace Home\Controllers;

use App\Controllers\BaseController;
use \noraziz\ci4twiggy;

class Cekidot extends BaseController {

    private $twiggy;
	
	public function index()
	{
        return  view('Home\Views\home', $data);
    }
	
	public function ccb()
	{
		//echo __CLASS__;

		$this->twiggy = new \noraziz\ci4twiggy\Twiggy();
		$this->twiggy->init(__CLASS__);
		$this->twiggy->title('Hello World on Home Module');
		$this->twiggy->layout('layout_model_1')->template('page_home')->display();
	}

    //--------------------------------------------------------------------
}
