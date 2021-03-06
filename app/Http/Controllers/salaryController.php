<?php

namespace App\Http\Controllers;

use App\Imports\salaryImport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Excel;
use File;

class salaryController extends Controller
{
    public function index()
    {   
        $result = DB::table('salary')
                ->join('employee', 'employee.acc_no', '=', 'salary.acc_no')
                ->get();
        
        $salog = DB::table('salary_log')
                ->orderBy('sal_id', 'desc')
                ->limit(5)
                ->get();
        return view('system.salary',['result'=>$result,'salog'=>$salog]);
    }
    
    public function import(Request $request)
    {
        $this->validate($request, [
            'select-file' => 'required|mimes:xls,xlsx'
        ]);
        
        $path = $request->file('select-file')->getRealPath();
        $data = Excel::import(new salaryImport, $path);

        // Upload Files
        $file  = $request->file('select-file');
        $fileName = date('Ymdhis')."_".$file->getClientOriginalName();
        $destination = public_path('Files/');
        File::makeDirectory($destination, 0777, true, true);
        $file->move(public_path('Files/'), $fileName);
        // Update File Destination to Mysql
        DB::table('salary_log')->insert(
            [
                'sal_file' => $fileName,
            ]
        );
       
        return back()->with('success', 'นำเข้าข้อมูลเงินเดือนสำเร็จ');
    }

}
