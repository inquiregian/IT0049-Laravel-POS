<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\UserAccount;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        Customer::create([
            'full_name' => 'Juan Dela Cruz',
            'email' => 'juan@email.com',
            'phone' => '09171234567'
        ]);

        Customer::create([
            'full_name' => 'Maria Santos',
            'email' => 'maria@email.com',
            'phone' => '09181234567'
        ]);

        Customer::create([
            'full_name' => 'Jose Reyes',
            'email' => 'jose@email.com',
            'phone' => '09191234567'
        ]);

        Customer::create([
            'full_name' => 'Ana Garcia',
            'email' => 'ana@email.com',
            'phone' => '09201234567'
        ]);

        Customer::create([
            'full_name' => 'Pedro Cruz',
            'email' => 'pedro@email.com',
            'phone' => '09211234567'
        ]);

        UserAccount::create([
            'username' => 'admin',
            'full_name' => 'System Administrator'
        ]);

        UserAccount::create([
            'username' => 'cashier1',
            'full_name' => 'Cashier One'
        ]);

        UserAccount::create([
            'username' => 'cashier2',
            'full_name' => 'Cashier Two'
        ]);

        UserAccount::create([
            'username' => 'manager',
            'full_name' => 'Store Manager'
        ]);

        UserAccount::create([
            'username' => 'staff',
            'full_name' => 'Store Staff'
        ]);
    }
}