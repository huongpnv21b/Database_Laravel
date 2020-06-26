<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class customersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->insert([
            'name'=>'Nguyen T H Huong',
            'gender'=>'nu',
            'email'=>'bakhiaquelua@gmail.com',
            'address'=>('123456'),
            'phone_number'=>'0832435',
            'image'=>'1dg',
            'note'=>'Hya lam'
        ]);
    }
}
