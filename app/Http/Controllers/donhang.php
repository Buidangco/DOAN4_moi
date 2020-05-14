<?php

namespace App\Http\Controllers;

use App\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use Mail;

class donhang extends Controller
{
    public function index(){
    	        $loaisp = DB::table("codeloai")->get();
    	return view('donhang.indexgiohang')->with('loaisp',$loaisp);
    }
}
