<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the AdminSeeder to create admin user(s)
        $this->call(AdminSeeder::class);
        $this->call(BuyerSeeder::class);
        $this->call(SupplierSeeder::class);

        // You can also include other seeders here as needed
        // $this->call(OtherSeeder::class);
    }
}
