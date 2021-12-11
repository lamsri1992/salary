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

    public function salary(Request $request)
    {
        $sal = DB::table('salary')
                ->join('employee', 'employee.acc_no', '=', 'salary.acc_no')
                ->where('employee.acc_no', '525-0-17142-7')
                ->where('salary.year',$request->get('years'))
                ->get();
        // return dd($sal);
        return view('pages.salary',['sal'=>$sal]);
    }
}
