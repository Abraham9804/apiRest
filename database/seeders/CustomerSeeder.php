<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()->count(20)->hasInvoices(25)->create(); 
        Customer::factory()->count(100)->hasInvoices(20)->create(); 
        Customer::factory()->count(100)->hasInvoices(1)->create(); 
        Customer::factory()->count(5)->create(); 
    }
}
