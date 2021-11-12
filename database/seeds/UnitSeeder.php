<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'unit_type'=> "Smartphone",
                'description'=>'Small Computer',
            ],
            [
                'unit_type'=> "Cabinet",
                'description'=>'Item Keeper',
            ],
            [
                'unit_type'=> "Table",
                'description'=>'Chilling',
            ],
            [
                'unit_type'=> "Lawn Mower",
                'description'=>'Cleaner',
            ],
        ];
        foreach($data as $u){
            \App\Unit::create($u);
        }
    }
}