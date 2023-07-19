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
        $timestamp = date('Y-m-d H:i:s', time());
        $students = [
            [
                'name' => 'Rendra',
                'student_id' => '11402901',
                'course' => 'Chemical engineering',
                'created_at' => $timestamp,
                'updated_at' => $timestamp,
            ],
        ];

        DB::table('students')->insert($students);

    }
}
