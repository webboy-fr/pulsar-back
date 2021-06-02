<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		//return view('welcome_message');

		echo base_url();

		exit('nothing to see here');
	}

	public function api()
	{
		//return view('welcome_message');

		echo base_url();

		exit('nothing to see here API');
	}

}
