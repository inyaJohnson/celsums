<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::where('name', 'admin')->first();
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'stock_',
            'email' => 'admin@capinvestmentfund.com',
            'password' => bcrypt('12345678'),
            'role_id' => $role->id,
            'phone' => '12345678901'
        ]);

    }
}
