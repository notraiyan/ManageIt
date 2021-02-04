<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name'=>'Pran Chanachur',
            'price'=>'200',
            'image'=>'https://images.app.goo.gl/rKhjFeoKGgXgAWm99',
            'expdate'=>'2022-09-01'
            
        ]);
    }
}
