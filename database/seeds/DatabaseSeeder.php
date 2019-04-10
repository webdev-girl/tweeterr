<?php

use Illuminate\Database\Seeder;

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
    }
    public function run()
    {
        // DB::table('users')->insert([
        // 'name' => Str::random(10),
        // 'email' => Str::random(10).'@gmail.com',
        // 'password' => bcrypt('secret'),
        // ]);
    },
        factory(App\User::class, 5)->create()->each(function ($user) {
            for($i=0; $i<=rand(1, 20); $i++) {
                $user->tweets()->save(factory(App\Tweet::class)->make());
            }

            });
    }
