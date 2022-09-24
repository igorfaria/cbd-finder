<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(10)->create();
        $Stores = \App\Models\Store::factory(50)->create();
        foreach($Stores as $store) \App\Models\Address::factory(mt_rand(1,3))->create([
            'store_id' => $store->id,
        ]);
    }
}
