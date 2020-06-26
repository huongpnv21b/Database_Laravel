<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'Tô Minh Phong 1',
            'email'=>'bakhiaquelua@gmail.com',
            'password'=>bcrybt('123456'),
            'avatar'=>'avatars/avatar.jpg',
            'content'=>'Hya lam'
        ],
        [
            'name'=>'Tô Minh Phong 1',
            'email'=>'bakhiaquelua@gmail.com',
            'password'=>bcrybt('123456'),
            'avatar'=>'avatars/avatar.jpg',
            'content'=>'Hya lam'
        ],
        [
            'name'=>'Tô Minh Phong 1',
            'email'=>'bakhiaquelua@gmail.com',
            'password'=>bcrybt('123456'),
            'avatar'=>'avatars/avatar.jpg',
            'content'=>'Hya lam'
        ]);
    }
}
