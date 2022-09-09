<?php

namespace Database\Seeders;

use App\Models\employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{

    public function run()
    {
        employee::query()->create(['name'=>'Aurora ' , 'surname'=>'Topojani' ,'EMBG'=>'1812200']);
    }
}
