<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        // Create an admin user
        Supplier::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        // You can add more admin users as needed
    }
}