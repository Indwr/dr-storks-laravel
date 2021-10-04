<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;

class addDoctorReportViewSeeder extends Seeder
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
                'name'      => 'Doctor Finance Report View',
                'is_active' => 1,
                'route'     => 'doctor.finance.report.view',
            ],
        ];

        foreach ($input as $data) {
            Module::create($data);
        }
    }
}
