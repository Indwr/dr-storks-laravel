<?php

namespace App\Queries;

use App\Models\Doctor;
use App\Models\DoctorFinance;
use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class CategoryDataTable.
 */
class DoctorFinanceReportDataTable
{
    /**
     * @param  array  $input
     *
     * @return DoctorFinance
     */
    public function get(array $input = [])
    {
        /** @var DoctorFinance $query */
        $query = DoctorFinance::whereHas('user')->with('user.media')->select('doctor_finance.*',DB::raw('MONTH(created_at) as month,sum(doctor_finance.amount) as totalAmount'))->groupBy('month');

        // $query->when(isset($input['status']) && $input['status'] != Doctor::STATUS_ALL,
        //     function (Builder $q) use ($input) {
        //         $q->whereHas('user', function ($q) use ($input) {
        //             $q->where('status', '=', $input['status']);
        //         });
        //     });

        return $query;
    }

    public function getWithDate(array $input = []){
 /** @var DoctorFinance $query */
        $query = DoctorFinance::whereHas('user')->with('user.media')->select('doctor_finance.*',DB::raw('MONTH(created_at) as month,sum(doctor_finance.amount) as totalAmount'))->groupBy('month');

        // $query->when(isset($input['status']) && $input['status'] != Doctor::STATUS_ALL,
        //     function (Builder $q) use ($input) {
        //         $q->whereHas('user', function ($q) use ($input) {
        //             $q->where('status', '=', $input['status']);
        //         });
        //     });

        return $query;
    }
}
