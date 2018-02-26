<?php

use Illuminate\Database\Seeder;

/*
 * Modelos
 */
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'root',
                'email' => 'root@app.com',
                'password' => bcrypt('root')
            ],
            [
                'name' => 'Alianza Verde',
                'email' => 'siapmining@gmail.com',
                'password' => bcrypt('alianzaverde**')
            ]
        ]);
    }
}
