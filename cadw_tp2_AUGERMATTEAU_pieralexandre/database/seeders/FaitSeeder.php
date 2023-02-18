<?php

namespace Database\Seeders;

use App\Models\Fait;
use Illuminate\Database\Seeder;
use File;

class FaitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fait::factory(50)->create();

        Fait::truncate();

        $json = File::get("database/data/cat-facts.json");

        $facts = json_decode($json, true);

        foreach ($facts['data'] as $fact) {
            Fait::create([
                'texte' => $fact['fact'],
            ]);
        };
    }
}
