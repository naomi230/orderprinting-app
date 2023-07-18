<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    public function run()
    {
        // Clear existing records from the invoices table
        Invoice::truncate();

        // Seed new records
        Invoice::create([
            'total' => 3000.00,
        ]);

        Invoice::create([
            'total' => 4000.00,
        ]);
        Invoice::create([
            'total' => 32500.00,
        ]);

        Invoice::create([
            'total' => 4000.00,
        ]);
        Invoice::create([
            'total' => 5000.00,
        ]);

        Invoice::create([
            'total' => 4000.00,
        ]);
        Invoice::create([
            'total' => 3000.00,
        ]);

        Invoice::create([
            'total' => 4000.00,
        ]);

        // Add more records as needed
    }
}
