<?php

namespace Database\Seeders;

use App\Models\Level;
use App\Models\Location;
use App\Models\Perfil;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Level::factory(10)->create();
        User::factory(10)->create();
        Perfil::factory(10)->create();
        Location::factory(10)->create();



        $user1 = new User();
        $user1->name="Alejandro";
        $user1->email="josueAle@gmail.com";
        $user1->email_verified_at= now();
        $user1->password= "bocadelpozo1929";
        $user1->avatar="Avatar1";
        $user1->remember_token= Str::random(10);
        $user1->level_id= 1;
        $user1->save();

    User::factory()->create([
        'name' => 'Josue',
        'email' => 'zurita@gmail.com',
        'email_verified_at' => now(),
        'password' => 'Jos123', // password
        'avatar' => 'Avatar123',
        'remember_token' => Str::random(10),
        'level_id' => 1,
    ]);
    }
}
