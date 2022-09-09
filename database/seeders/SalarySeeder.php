<?php

namespace Database\Seeders;


use App\Models\salary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalarySeeder extends Seeder
{

    public function run()
    {
       salary::query()->create(['salary'=>'500']);
    }
}
