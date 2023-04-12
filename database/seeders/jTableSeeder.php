<?php

namespace Database\Seeders;

use App\Models\jTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class jTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jtable = [
            [
                'name'=>'Book',
                'quantity'=>3,
                'rate'=>300,
            ],
            [
                'name'=>'pendrive',
                'quantity'=>1,
                'rate'=>340,
            ],
                [
                'name'=>'CD',
                'quantity'=>5,
                'rate'=>150,
                ]
        ];
        foreach($jtable as $row){
            jTable::Create([
                'name' =>$row['name'],
                'quantity'=>$row['quantity'],
                'rate'=>$row['rate'],
            ]);
        }
           
    }
}
