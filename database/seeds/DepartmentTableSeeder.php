<?php

use App\Hrm\Department;
use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Department::create([
            'name'=>'operation',
            'about'=>'About the department',
            'status' => 1,
        ]);
       Department::create([
            'name'=>'human resource',
            'about'=>'About the department',
            'status' => 1,
        ]);
       Department::create([
            'name'=>'Maintenece',
            'about'=>'About the department',
            'status' => 1,
        ]);
    }
}
