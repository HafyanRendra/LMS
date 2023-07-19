<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
            $timestamp = date('Y-m-d H:i:s', time());
            $books = [
                [
                    'category' => 'IT Programming',
                    'isbn' => '001',
                    'title' => 'Belajar laravel untuk pemula',
                    'author'=> 'Rendra',
                    'publisher'=>'Progate',
                    'status' => 'not_started',
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ],
                [
                    'category' => 'Politics',
                    'isbn' => '110',
                    'title' => 'Pemilu 2024',
                    'author'=> 'Prof. Tarjono',
                    'publisher'=>'Gramedia',
                    'status' => 'not_started',
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ],
                [
                    'category' => 'Engineering',
                    'isbn' => '220',
                    'title' => 'Software Engineering',
                    'author'=> 'Prof. Uding',
                    'publisher'=>'Pustaka',
                    'status' => 'not_started',
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ],
                [
                    'category' => 'Science and Technology',
                    'isbn' => '330',
                    'title' => 'A complex of php code',
                    'author'=> 'Prof. Marco',
                    'publisher'=>'Tiga serangkai',
                    'status' => 'not_started',
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ],
                [
                    'category' => 'IT Programming',
                    'isbn' => '009',
                    'title' => 'Belajar php bagi pemula',
                    'author'=> 'Prof. TYoono',
                    'publisher'=>'Gramedia',
                    'status' => 'not_started',
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ],
                [
                    'category' => 'Engineering',
                    'isbn' => '229',
                    'title' => 'Coding handbook',
                    'author'=> 'Prof. Jono',
                    'publisher'=>'Gramedia',
                    'status' => 'not_started',
                    'created_at' => $timestamp,
                    'updated_at' => $timestamp,
                ],
            ];
    
            DB::table('books')->insert($books);
    
     }
}