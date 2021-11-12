<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'category'=> "Gadget",
                'description'=>'a small mechanical or electronic device or tool',
            ],
            [
                'category'=> "Furniture",
                'description'=>'equipment that is necessary, useful, or desirable',
            ],
            [
                'category'=> "Machine",
                'description'=>'an apparatus using or applying mechanical power and having several parts, each with a definite function and together performing a particular task',
            ]
        ];
        foreach($data as $c){
            \App\Category::create($c);
        }
    }
}
