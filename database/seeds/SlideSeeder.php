<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
            'link'=>'httl',
            'image'=>'img/1.jpg'
        ]
    );

    }
}
