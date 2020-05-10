<?php

use App\Hrm\Personale;
use Illuminate\Database\Seeder;

class PersonaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personale::create([
            'name'=>'Dispacher',
            'about'=>'About the job title',
            'status' => 1,
            'department_id' => 1
        ]);
    }
}
