<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("students")->insert([
            [
                'name' => 'Farhan',
                'student_id_number' => 'F55122071',
                'email' => 'farhan@gmail.com',
                'phone_number' => '6285342089313',
                'birth_date' => '2003-09-20',
                'gender' => 'Male',
                'status' => 'Active',
                'major_id' => 1,
            ],
            [
                'name' => 'Muty',
                'student_id_number' => 'F55122013',
                'email' => 'mutyb@gmail.com',
                'phone_number' => '6285323412112',
                'birth_date' => '2003-08-05',
                'gender' => 'Female',
                'status' => 'Inactive',
                'major_id' => 2,
            ],
        ]);
    }
}

//F55123022_Aqilah Nur Aisyah Putri