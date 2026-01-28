<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'PT. Maju Mundur',
            'email' => 'ptmajumundur@example.com',
            'address' => 'Jl. Teknologi No. 123',
            'phone' => '08123456789',
            'logo' => 'logo.png',
        ]);
    }
}
