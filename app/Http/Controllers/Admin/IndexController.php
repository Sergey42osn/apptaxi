<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\AnketaAddDriver;

class IndexController extends Controller
{

    public function index(Request $request)
    {
        return view('admin.admin',[
        					'title' => 'Административная панель',
        					'data' => 	'data'
        				]);
    }

    public function showAnkets()
    {
    	$ankets = AnketaAddDriver::all();
    	return $ankets;
    }
}
