<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Listing::create([
            'title' => 'Web Developer',
            'tags' => 'php, laravel, javascript',
            'email' => 'example@gmail.com',
            'company' => 'Acme Inc.',
            'location' => 'New York, NY',
            'website' => 'http://www.acme.com',
            'description' => 'We are looking for a web developer to join our team.'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
