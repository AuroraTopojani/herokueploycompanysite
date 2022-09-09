<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    public function run()
    {
        Company::query()->create(['name'=>'TopComerc' , 'address'=>'Road 157 n2']);
    }
}
