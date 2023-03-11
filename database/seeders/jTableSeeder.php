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
                'name'=>'Albert roger',
                'city'=>'Silicon valley',
                'Birth_date'=>'1990-06-07',
                'status'=>'active',
                'Record_Date'=>'2023-03-06'
            ],
            [
                'name'=>'Baskin Robins',
                'city'=>'Paris',
                'Birth_date'=>'1944-01-20',
                'status'=>'passive',
                'Record_Date'=>'2023-03-03'
            ],
                [
                    'name'=>'christopher loupez',
                    'city'=>'athens',
                    'Birth_date'=>'1982-01-21',
                    'status'=>'active',
                    'Record_Date'=>'2023-03-05'
                ]
        ];
        foreach($jtable as $row){
            jTable::Create([
                'name' =>$row['name'],
                'city'=>$row['city'],
                'Birth_date'=>$row['Birth_date'],
                'status'=>$row['status'],
                'Record_Date'=>$row['Record_Date']

            ]);
        }
           
    }
}
