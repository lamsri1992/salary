<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class myController extends Controller
{
    public function employee()
    {   
        $emp = DB::table('employee')->get();
        return view('pages.employee',['emp'=>$emp]);
    }

    public function salary()
    {
        return view('pages.salary');
    }
}
