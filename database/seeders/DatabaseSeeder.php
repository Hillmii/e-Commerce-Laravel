<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\category;
use App\Models\DetailCategory;
use App\Models\Inventory;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Product::factory(100)->create();

        User::create([
            'name' => 'Mhhidayat',
            'email' => 'hilmi@gmail.com',
            'password' => Hash::make('password')
        ]);

        Category::create([
            'name' => 'DEVICE',
        ]);
        Category::create([
            'name' => 'LIQUID'
        ]);
        Category::create([
            'name' => 'ATOMIZER'
        ]);
        Category::create([
            'name' => 'AKSESORIS'
        ]);
        Category::create([
            'name' => 'COIL'
        ]);

        DetailCategory::create([
            'name' => 'MOD',
            'category_id' => '1',
        ]);
        DetailCategory::create([
            'name' => 'POD',
            'category_id' => '1',
        ]);
        DetailCategory::create([
            'name' => 'AIO',
            'category_id' => '1',
        ]);
        DetailCategory::create([
            'name' => 'FREEBASE',
            'category_id' => '2',
        ]);
        DetailCategory::create([
            'name' => 'SALTNIC',
            'category_id' => '2',
        ]);
        DetailCategory::create([
            'name' => 'RDA',
            'category_id' => '3',
        ]);
        DetailCategory::create([
            'name' => 'RTA',
            'category_id' => '3',
        ]);
        DetailCategory::create([
            'name' => 'COTTON',
            'category_id' => '4',
        ]);
        DetailCategory::create([
            'name' => 'BATTERY',
            'category_id' => '4',
        ]);
        DetailCategory::create([
            'name' => 'CHARGER',
            'category_id' => '4',
        ]);
        DetailCategory::create([
            'name' => 'OCC',
            'category_id' => '5',
        ]);
        DetailCategory::create([
            'name' => 'PREBUILD',
            'category_id' => '5',
        ]);



    }
}
