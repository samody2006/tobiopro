<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        DB::table('admins')->insert([
            [
                
                'name'          => 'Admin',
                'email'         => 'admin@admin.com',
                'avatar'         => 'user.jpg',
                'password'      => bcrypt('123456'),
                'issuper'         => '1',
                'created_at'    => date("Y-m-d H:i:s")
            ]
            ]);
    }
}

