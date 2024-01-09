<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Address;
use App\Models\Education;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create();
        // User::factory(50)->has(Address::factory())->has(Education::factory())->create();
        // $this->call(DatabaseSeeder::class);
        // User::factory(50)->create()->each(function ($user) {
        //     $user->address()->save(Address::factory()->make());
        //     $user->education()->save(Education::factory()->make());
        // });

        User::factory()->count(50)->create();


        // $data = [
        //     'id' => 1,
        //     'first_name' => 'saidul',
        //     'last_name' => 'akib',
        //     'email' => 'akib@example.com'
        // ];

        // dd($data);
        // User::create($data);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
