<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;

class addDoctorReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input = [
            [
                'name'      => 'Doctor Finance Report',
                'is_active' => 1,
                'route'     => 'doctor.finance.report',
            ],
        ];

        foreach ($input as $data) {
            Module::create($data);
        }
    }
}
