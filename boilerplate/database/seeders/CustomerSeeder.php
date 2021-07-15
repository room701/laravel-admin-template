<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = [
            [
                'company' => 'Commhere',
                'tax_id' => '53320214',
                'contact_person' => 'Denny',
                'email' => 'denny@comhere.com',
                'fee' => 3.5,
            ],
        ];

        foreach($customers as $customer) {
            Models\Customer::create($customer);
        }
    }
}
