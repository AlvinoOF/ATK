<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
        if (in_groups('admin')) :
		    return view('dashboard');
        else :
            return view('dashboard_user');
        endif;
	}
}
