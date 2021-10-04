<?php

namespace App\Http\Controllers;
use App\Queries\DoctorFinanceReportDataTable;
use DataTables;
use Illuminate\Http\Request;

class DoctorFinanceController extends Controller
{
    public function index(Request $request)
    {
            if ($request->ajax()) {
                return DataTables::of((new DoctorFinanceReportDataTable())->get())->make(true);
            }
            return view('reports.index');
    }

    public function filterByMonth(Request $request){
        if ($request->ajax()) {
            return DataTables::of((new DoctorFinanceReportDataTable())->get())->make(true);
        }
        return view('reports.view');
    }
}
